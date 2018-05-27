<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Libraries\Services\ExchangeRateService;
use App\Libraries\Providers\FixerIoExRProvider;
use App\Libraries\Providers\YahooExRProvider;
use App\Libraries\Providers\CurrencyConverterExRProvider;

class ProvidersTest extends TestCase{
    public function testFixerIoExRProvider(){
        $fixerIo =  new FixerIoExRProvider();
        $rate = $fixerIo->getRate('EUR','KHR');
        $this->assertNotEquals(0, $rate);
     }

    public function testYahooExRProvider(){
        $yahoo =  new YahooExRProvider();
        $rate = $yahoo->getRate('EUR','KHR');
        $this->assertNotEquals(0, $rate);
    }

    public function testCurrencyConverterExRProvider(){
        $currency = new CurrencyConverterExRProvider();
        $rate = $yahoo->getRate('EUR','KHR');
        echo $rate;
        $this->assertNotEquals(0, $rate);
    }
}
