<?php

namespace Controllers\Creators;

use App\Core\Controller;

class CreatorsController extends Controller{


    public $creators = [];
    public $idHero;
    public $stepX = 0;
    public $stepY = 0;


    public function ironman() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009368;

        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function capamerica() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009220;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function blackwidow() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009189;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }


    public function hulk() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009351;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function thor() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009664;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function _3D_man() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1011334;
        $this->idHero = 1017100;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function a_bomb() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1017100;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function aim() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009144;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function Aaron_Stack() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1010699;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

    public function Abomination() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009146;
        
        #STEP 2: Obtengo los creadores
        $creators = $this->getCreators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($creators);
    }

}