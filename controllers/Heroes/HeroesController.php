<?php

namespace Controllers\Heroes;

use App\Config\Config;
use App\Core\BaseController;

class HeroesController extends BaseController{

    public function get(){


        $config = new Config();
        $segment = "characters?";
        $config->setSegment($segment);

        $endpoint = $config->getEndPoint();
        $data = $this->execute_curl($endpoint);

        $heros = [];
        $hero = [];
        $i = 0;
        foreach($data->data->results as $heroe){
            $hero[$i]['name'] = $heroe->name;
            $hero[$i]['endpoint'] = 'http://api_marvel.test/?sc=creators/get/' . $heroe->id;
            $i++;
        }
        $heros['heros'] = $hero;
        echo json_encode($heros);

    }

}