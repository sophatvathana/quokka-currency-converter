<?php
namespace App\Libraries\Utils;
use App\Libraries\Exceptions\ServiceException;

class HttpUtil {

    //THIS IS USING CURL TO GET FROM API
    public static function curl($end_point) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)',
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $end_point,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 5,
            // CURLOPT_HEADER => true
        ));
        $resp = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if (curl_errno($curl)) {
            $httpEror = curl_error($curl);
        }
        curl_close($curl);
        switch ($httpcode) {
            case 200:
                return $resp;
                break;
            case 400:
                throw new ServiceException('Unexpected HTTP code: ' . $httpcode);
            default:
                throw new ServiceException($httpEror);
        }
    }
}
    ?>
