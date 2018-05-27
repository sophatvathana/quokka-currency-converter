<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExchangeRateService;
use App\Libraries\ExchangeRateFactory;
use App\Libraries\Exceptions\ServiceException;
use App\Models\Options;
use App\Libraries\Enums\CurrencyCountry;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        \Session::forget('message');
        $data = $request->input();
        $data['isShowForm'] = !empty($data);
        $from = isset($data['from'])?$data['from']:"";
        $to = isset($data['to'])?$data['to']:"";
        $amount = isset($data['amount'])?$data['amount']:1.0;
        $t = new ExchangeRateFactory();
        $data['from'] = $from;
        $data['to'] = $to;
        $data['amount'] = $amount;
        $defaultMode = Options::get_option('exchangeratemode_default');
        $t->singleton($defaultMode);
        $data['countryFrom'] = isset(CurrencyCountry::data[$from])?CurrencyCountry::data[$from]:"";
        $data['countryTo'] =
        isset(CurrencyCountry::data[$to])?CurrencyCountry::data[$to]:"";
		try {
            $calcResult = $t->calculate($amount, $from, $to);
            $calcResultReverse = $t->calculate($amount, $to, $from);
            $data['calcResult'] = $calcResult;
            $data['calcResultReverse'] = $calcResultReverse;
		} catch (ServiceException $e) {
            \Session::flash('message', $e->getMessage());
            \Session::flash('alert-class', 'alert-danger');
        }
        return view('welcome', ['data'=>$data]);
    }
}
