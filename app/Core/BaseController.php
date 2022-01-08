<?php

namespace App\Core;


class BaseController{


    public function __construct()
    {

    }

    public function execute_curl(string $endpoint){


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        return json_decode($res);


    }


}