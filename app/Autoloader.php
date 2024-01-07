<?php

/**
 * Class Autoloader
 *
 * The Autoloader class is responsible for registering and loading classes
 * using the PHP autoloading mechanism.
 */

namespace App;
class Autoloader{ //test git
    static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));
    }
   static function autoload($class){
        if (strpos($class,__NAMESPACE__.'\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\','',$class);
            $class = str_replace('\\','/',$class);
            require __DIR__.'/'. $class . ".php";
        }
    }

}

