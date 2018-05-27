<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Libraries\Services\ExchangeRateService;
class OptionsTest extends TestCase
{

    public function testHookAddExchangeRateMode(){
        $exchanges = [
        ["id"=>"FixerIo","name"=>"Flex.io Exchange Rate","description"=>"","selected_by_default"=>"","active"=>"1"],["id"=>"Yahoo","name"=>"Yahoo Exchange Rate","description"=>"","selected_by_default"=>"","active"=>"1"]
        ];
        $exchangeRateServicenew  = new ExchangeRateService();
        $exchange_rate_modes =  $exchangeRateServicenew->get_exchange_rate_modes(true);
        $this->assertNotEquals(0, count($exchange_rate_modes));
    }
    /**
    * A basic test example.
    *
    * @return void
    */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
