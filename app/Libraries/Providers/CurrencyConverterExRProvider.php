<?php
namespace App\Libraries\Providers;
use App\Models\Options;
use App\Libraries\Utils\HttpUtil;
use App\Libraries\Exceptions\ServiceException;
class CurrencyConverterExRProvider implements IExchangeRateProvider {
  /**
   * Date format YYYY-MM-DD
   */
  const API = "http://free.currencyconverterapi.com/api/v5/convert?q=%s&compact=y";
  public function getRate($from, $to){
    $currencyPair = sprintf("%s_%s", $from, $to);
    $url = sprintf(self::API, $currencyPair);
    $resp = json_decode(HttpUtil::curl($url), true);
    if (empty($resp)) {
        throw new ServiceException("Invalid currency or not available yet!");
    }
    if(empty($resp[$currencyPair]))
      throw new ServiceException($resp->error);

    return ((array)$resp[$currencyPair])['val'];
  }

}
