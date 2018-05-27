<?php
namespace App\Libraries\Services;
interface CurrencyConverterInterface
{
    /**
     *
     * @param array|string   $from
     * @param array|string   $to
     * @param float optional $amount
     *
     * @return float
     */
    public function convert($from, $to, $amount = 1, $format = 1, $date = "");
}
