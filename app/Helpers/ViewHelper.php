<?php 
namespace App\Helpers;
use ReflectionClass;
use Illuminate;
use App\Models\Options;
class ViewHelper {
  public static function getInstance($classname){
        $class = 'App\Libraries\\'.$classname;
        return app($class);
  }

  public static function getOption($name){
    return Options::get_option($name);
  }
}