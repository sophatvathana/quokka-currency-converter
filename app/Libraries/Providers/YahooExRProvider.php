<?php
namespace App\Libraries\Providers;
use App\Libraries\Utils\HttpUtil;
class YahooExRProvider implements IExchangeRateProvider{
    const API = 'https://query.yahooapis.com/v1/public/yql?q=%s&env=store://datatables.org/alltableswithkeys&format=json';

    public function getRate($from, $to){
        $currency = sprintf('"%s%s"', $from, $to);
        $query = sprintf('select * from yahoo.finance.xchange where pair in (%s)', $currency);
        $url = sprintf(self::API, urlencode($query));
        echo $url;
        $resp = json_decode(HttpUtil::curl(urlencode($url)));
        echo json_encode($resp);
        // if(!isset($resp->rates))
        //   throw new ServiceException($resp->error->type);

        return $resp;
    }

}
