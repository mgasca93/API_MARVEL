<?php

namespace Controllers\Collaborators;

use App\Core\Controller;

class CollaboratorsController extends Controller{

    public $idHero;

    public function ironman() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009368;

        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        // $this->debug($collaborators);exit();
        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

    public function capamerica() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009220;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

    public function blackwidow() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009189;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }


    public function hulk() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009351;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

    public function thor() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009664;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

    public function _3D_man() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1011334;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

    public function a_bomb() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1017100;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

    public function aim() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1009144;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

    public function Aaron_Stack() :void{
        #STEP 1: Inicializo el ID del super heroes
        $this->idHero = 1010699;
        
        #STEP 2: Obtengo los creadores
        $collaborators = $this->getCollaborators($this->idHero);

        #STEP 3 : Renderizo el json con los creadores del super heroe
        $this->render($collaborators);
    }

}