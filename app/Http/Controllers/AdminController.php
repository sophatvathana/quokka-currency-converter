<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Services\ExchangeRateService;
use App\Libraries\Exceptions\ServiceException;
use App\Models\Options;
class AdminController extends Controller{

	public function __constructor(){
        $this->middleware('auth');
	}

	public function index(){
        \Session::forget('message');
        $exchangeRateService = new ExchangeRateService();
        $dataExchanges = $exchangeRateService->get_exchange_rate_modes(true);
        $exchangeRateModes = $exchangeRateService->get_exchange_rate_modes(false);
        $data['exchangeRateModes'] = $exchangeRateModes;
        $data['defaultExchangeRate'] = Options::get_option('exchangeratemode_default');
        return view('admin')->with([
            'exchangeRates'=>$dataExchanges,                 'data'=>$data]);
	}

	public function store(Request $request){
            $settings = $request->input();
			foreach ($settings as $key => $value) {
				\DB::table('options')->where('name', $key)->update(['value' => $value]);
            }
			return redirect('admin')->with('message', 'Settings updated!');

	}
}
