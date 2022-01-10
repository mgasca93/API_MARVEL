<?php
namespace App\Core;

class App
{
    protected $url;
    protected string $controller;
    protected array $params;

    public function __construct(){
        $this->url = empty($_GET['url']) ? "heroes" : $_GET['url']; 
        $this->controller = '';
        $this->params = [];
    }

    public function run(){
        $this->build();

        $fileController = "Controllers/" . ucfirst($this->url[0]) . "/" . $this->getController() . ".php";
 
        if(file_exists($fileController)){   
            $controllerName = "Controllers\\" . ucfirst($this->url[0]) . "\\" . $this->getController();
            $controller = new $controllerName();

            $nparams = sizeof($this->getParams());
         
            if($nparams > 0){                
                if($nparams > 1){
                    $controller->{$this->url[1]}($this->getParams());
                }else{
                    $controller->run();
                }                
            }else{
                $controller->run();
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
        if($nparams > 0){
            for($i = 0; $i < $nparams; $i++){
                array_push($params, $this->url[$i]);
            }
            $this->params = $params;
        }
    }

}