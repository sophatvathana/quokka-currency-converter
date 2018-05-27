<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Services\ExchangeRateService;
use App\Libraries\ExchangeRateFactory;
use App\Libraries\Exceptions\ServiceException;
use App\Models\Options;

class ExchangeRateFactoryTest extends TestCase {
    public function testLoadInstanceProvider(){
        $this->assertTrue(true);
    }
    public function testCalculate(){
        $t = new ExchangeRateFactory();
        $t->singleton("FixerIo");
        $calcResult = $t->calculate(2121,'EUR', 'KHR');
        $this->assertNotEquals(0, $calcResult);
    }
}
