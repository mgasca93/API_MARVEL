<?php
namespace App\Core;
use Exception;

class App
{
    protected $url;
    protected string $controller;
    protected array $params;

    //Cada vez que se accede al objeto, construmos la URL a consumir
    public function __construct(){
        $this->url = empty($_GET['sc']) ? "collaborators" : $_GET['sc']; 
        $this->controller = '';
        $this->params = [];
    }

    public function run(){
        $this->build();
        
        $fileController = "../Controllers/" . ucfirst($this->url[0]) . "/" . $this->getController() . ".php";
        
        if(file_exists($fileController)){   
            $controllerName = "Controllers\\" . ucfirst($this->url[0]) . "\\" . $this->getController();
            $controller = new $controllerName();

            $nparams = sizeof($this->getParams());
            if($nparams > 0){                
                if($nparams > 1){
                    $controller->{$this->url[1]}($this->getParams());
                }else{
                    $controller->{$this->url[1]}();
                }                
            }else{
                
                $controller->render($this->url[0]);
            }
        }else
        {
           $controller = new \Controllers\ManagerError\ManagerErrorController();
           $controller->run();
        }
    }

    private function getController() :string{
        return $this->controller;
    }


    private function getParams() :array{
        return $this->params;
    }

    private function build() :void{
        $this->url = rtrim($this->url, "/");
        $this->url = explode("/", $this->url);
        
        $this->controller = ucfirst($this->url[0]) . "Controller";

        $nparams = sizeof($this->url);
        $params = [];
        if($nparams > 1){
            for($i = 1; $i < $nparams; $i++){
                array_push($params, $this->url[$i]);
            }
            $this->params = $params;
        }
    }
}