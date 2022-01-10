<?php 
namespace App\Core;

use Config\Config;

class Controller{

    public $config;

    public function __construct(){
        $this->config = new Config();        
    }

    public final function render($response){

        echo json_encode($response);

    }

    public function execute(string $segment){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->builtEndpoint($segment));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        return json_decode($res);

    }

    public function builtEndpoint($segment){
        $this->config->setSegment($segment);
        return $this->config->getEndPoint();
    }


    public function getCreators($IdHeroe): array{

        $config = new Config();

        #STE 1: Inicializo el arreglo de creadores
        $this->creators['editors'][$this->stepX] = NULL;
        $this->creators['writers'][$this->stepY] = NULL;

        #STEP 2: Creo el segmento para obtener los comics
        $segment = "characters/$IdHeroe/comics?";
        $config->setSegment($segment);

        #STEP 3: Ejecuto el endpoint
        $result = $this->execute($segment);


        #STEP 4: Obtengo el nombre y rol del creador del comic
        foreach($result->data->results as $comicitem){
            foreach($comicitem->creators as $creator){
                if(is_array($creator)){
                    $this->addCreator($creator);
                }
            }
        }
        
        #STEP 5: Retorno todos los editores y escritores
        return $this->creators;
    }

    public function addCreator($creator) : void{

        #STEP 1: Recorro el arreglo recibido en busca de todos los creadores y filtro en base al rol
        foreach($creator as $creatorInfo){
            $search = $creatorInfo->name;

            #STEP 2: Realizo una busqueda secuencial, para no repetir creadores
            switch($creatorInfo->role){
                case 'editor':
                    if($this->searchCreatorInArray($search)){
                        $this->creators['editors'][$this->stepX] = $creatorInfo->name;
                        $this->stepX++;
                    }
                    break;
                case 'writer':
                    if($this->searchCreatorInArray($search)){
                        $this->creators['writers'][$this->stepY] = $creatorInfo->name;
                        $this->stepY++;
                    }
                    break;
            }
        }
        
    }

    public function searchCreatorInArray($search) : bool{

        #STEP 1: Inicio el valor del flag en true
        $flag = true;

        #STEP 2: Realizo la busqueda y si el creador ya existe en el array, cambio el valor del flag a false
        foreach($this->creators as $creator){
            for($i = 0; $i < count($creator); $i++){
                if(strcmp($creator[$i], $search) == 0){
                    $flag = false;
                }
            }
        }

        #STEP 3: Devolvemos el valor del flag
        return $flag;

    }
    
    public function debug($debug){
        echo "<pre>";print_r($debug);echo "</pre>";
    }

}