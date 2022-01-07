<?php

namespace App\Core;

use App\Config\Config;
class BaseController{


    public function __construct()
    {

    }

    public function render(){
        $config = new Config();
        var_dump($config->getURL());
    }


    public final function redirect($controller){
        $ruta = constant("URL") . $controller;
        header("location: $ruta");    
        die();
    }


}