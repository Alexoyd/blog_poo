<?php
namespace App;

class Config{
    private $settings = [];
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    public function __construct(){
       $this->settings = require dirname(__DIR__) . '/config/config.php';
    }
    public function get($key){
        return isset($this->settings[$key]) ? $this->settings[$key] : null;
    }
    public function set($key){
        $this->settings[$key] = $value;
    }
}