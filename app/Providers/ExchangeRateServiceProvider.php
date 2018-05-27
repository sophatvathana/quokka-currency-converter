<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\Utils\FileUtil;
use ReflectionClass;
use Illuminate\Support\Facades\Blade;
use Illuminate;

class ExchangeRateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::directive('getInstance', function ($classname) {
        //     $class = 'App\Libraries\\'.$classname;
        //     $r = new ReflectionClass($class);
        //     if($r){
        //         return $r->newInstance();
        //     }
        // });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $modes = FileUtil::list_files(app_path().'/Libraries');
        $container = new Illuminate\Container\Container();
        foreach ($modes as $mode) {
            $pathinfo =  pathinfo($mode);
            if ($pathinfo['extension'] == 'php' && 0 !== strpos($mode, '.')) {
                $class = 'App\Libraries\\'.$pathinfo['filename'];
                $r = new ReflectionClass($class);
                if (!$r->isAbstract() && !$r->getConstructor()->getNumberOfRequiredParameters()) {
                    $container->singleton($class);
                    $instance = $container->make($class);
                    // $obj = $r->newInstance();
                    // $this->app->bind($class, function ($app) {
                    //     return $obj;
                    // });
                }

            }
        }

    }

}
