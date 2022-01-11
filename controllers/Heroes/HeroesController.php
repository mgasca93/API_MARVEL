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
        $heros[0]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/ironman');
        $heros[0]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/ironman');

        $heros[1]['name']      = 'Capitan America';
        $heros[1]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/capamerica');
        $heros[1]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/capamerica');

        $heros[2]['name']      = 'Black Widow';
        $heros[2]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/blackwidow');
        $heros[2]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/blackwidow');

        $heros[3]['name']      = 'Hulk';
        $heros[3]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/hulk');
        $heros[3]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/hulk');

        $heros[4]['name']      = 'Thor';
        $heros[4]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/thor');
        $heros[4]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/thor');

        $heros[5]['name']      = '3-D Man';
        $heros[5]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/_3D_man');
        $heros[5]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/_3D_man');

        $heros[6]['name']      = 'A-Bomb';
        $heros[6]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/a_bomb');
        $heros[6]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/a_bomb');

        $heros[7]['name']      = 'A.I.M';
        $heros[7]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/aim');
        $heros[7]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/aim');

        $heros[8]['name']      = 'Aaron Stack';
        $heros[8]['endpoints']['creators']  = $this->format->URL($this->config->getBaseURL() . 'creators/Aaron_Stack');
        $heros[8]['endpoints']['collabortors']  = $this->format->URL($this->config->getBaseURL() . 'collaborators/Aaron_Stack');


        $this->render($heros);

    }

}