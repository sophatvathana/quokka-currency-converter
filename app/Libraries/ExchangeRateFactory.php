<?php
namespace App\Libraries;
use App\Libraries\Providers\IExchangeRateProvider;
use Illuminate;
use App\Libraries\Exceptions\ServiceException;
class ExchangeRateFactory{
    private $mode;

    public function setMode(IExchangeRateProvider $mode)
    {
        $this->mode = $mode;
    }

    public function load()
    {
        // Should cachable here
        return $this->mode;
    }

    public function singleton($class_name = ""){
        $container = new Illuminate\Container\Container();
        $class = 'App\Libraries\Providers\\'.$class_name.'ExRProvider';
        $container->singleton($class);
        $instance = $container->make($class);
        $this->mode = $instance;
    }

    public function calculate($amount=0.0, $from="", $to=""){
        $rate = 0;
        try{
            $rate = $this->mode->getRate($from, $to);
        }catch(ServiceException $e){
            throw new ServiceException($e->getMessage());
        }
        return $rate * $amount;
    }
}
