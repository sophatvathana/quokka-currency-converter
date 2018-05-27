<?php
namespace App\Libraries\Providers;
use App\Models\Options;
use App\Libraries\Utils\HttpUtil;
use App\Libraries\Exceptions\ServiceException;
class FixerIOExRProvider implements IExchangeRateProvider {
  /**
   * Date format YYYY-MM-DD
   */
  const API = "http://data.fixer.io/api/%s?access_key=%s&base=%s&symbols=%s";
  public function getRate($from, $to){
    $access_key = Options::get_option('exchangeratemode_flexio_access_key');
    $now_date = date("Y-m-d");
    $url = sprintf(FixerIOExRProvider::API, $now_date, $access_key, $from, $to);
    $resp = json_decode(HttpUtil::curl($url));
    if(!isset($resp->rates))
      throw new ServiceException($resp->error->type);

    return ((array)$resp->rates)[$to];
  }

}
