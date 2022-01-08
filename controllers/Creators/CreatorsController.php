<?php

namespace Controllers\Creators;

use App\Core\BaseController;
use App\Config\Config;
use Controllers\FormaterName\FormaterNameController;

class CreatorsController extends BaseController{


    public $creators = [];
    public $stepX = 0;
    public $stepY = 0;

    public function get(array $data){
       

        $IdHeroe = $data[1];
        $response = $this->getCreators($IdHeroe);

        echo json_encode($response);
    }

    public function getCreators($IdHeroe): array{

        $config = new Config();
        $allCreators = [];
        #STEP 1: Ontengo la informacion del super heroe
        $segment = "characters/".$IdHeroe."?";
        $config->setSegment($segment);

        $endpoint = $config->getEndPoint();
        $result = $this->execute_curl($endpoint);

        #STEP 2: Extraigo el id del comics del resourceURI
        $idComics = [];
        foreach($result->data->results as $comicitem){
            foreach($comicitem->comics->items as $item){

                #STEP 3: Obtengo el nombre y rol del creador del comic
                $segment = 'comics/' . $this->getIdComic($item->resourceURI) . '?';
                $config->setSegment($segment);
                $endpoint = $config->getEndPoint();
                
                #STEP 4: Ejecuto el endpoint y obtengo los editores y creadores del comic
                $creators = $this->execute_curl($endpoint);
                $this->addCreator($creators);
            }
        }

        #STEP 5: Retorno todos los editores y escritores
        return $this->creators;
    

    }

    public function addCreator($comic){

        foreach($comic->data->results as $info){
            foreach($info->creators->items as $creator){
                if($creator->role == 'editor'){
                    $this->creators['editors'][$this->stepX] = $creator->name;
                    $this->stepX++;
                }
                if($creator->role == 'writer'){
                    $this->creators['writers'][$this->stepY] = $creator->name;
                    $this->stepY++;
                }
            }
        }
        
    }

    public function searchInArray($array, $search, $index){
        $flag = true;
        foreach($array as $items){
            for($i = 0; $i < count($items); $i++){
                if(strcmp($items[$i], $search) != 0){ 
                    $flag = false;
                }
            }
        }

        return $flag;
    }

    public function getIdComic(string $resourceURI){
        $arr_resource = explode('/', $resourceURI);
        $length = count($arr_resource);
        return $arr_resource[$length - 1];
    }

}