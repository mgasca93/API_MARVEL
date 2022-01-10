<?php

namespace Controllers\Heroes;

use App\Core\Controller;
use App\Helpers\Format\FormaterURL;

class HeroesController extends Controller{

    public $format = null;

    public function __construct(){
        parent::__construct();
        $this->format = new FormaterURL;
    }

    public function run($data = []){

        $heros[0]['name']      = 'Iron Man';
        $heros[0]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/ironman');

        $heros[1]['name']      = 'Capitan America';
        $heros[1]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/capamerica');

        $heros[2]['name']      = 'Black Widow';
        $heros[2]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/blackwidow');

        $heros[3]['name']      = 'Hulk';
        $heros[3]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/hulk');

        $heros[4]['name']      = 'Thor';
        $heros[4]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/thor');

        $heros[5]['name']      = '3-D Man';
        $heros[5]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/_3D_man');

        $heros[6]['name']      = 'A-Bomb';
        $heros[6]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/a_bomb');

        $heros[7]['name']      = 'A.I.M';
        $heros[7]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/aim');

        $heros[8]['name']      = 'Aaron Stack';
        $heros[8]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/Aaron_Stack');

        $heros[9]['name']      = 'Abomination';
        $heros[9]['endpoint']  = $this->format->URL($this->config->getBaseURL() . 'creators/Abomination');

        $this->render($heros);

    }

}