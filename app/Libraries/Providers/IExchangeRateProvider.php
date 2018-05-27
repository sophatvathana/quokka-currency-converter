<?php
namespace App\Libraries\Providers;

interface IExchangeRateProvider
{
    public function getRate($from, $to);
}

