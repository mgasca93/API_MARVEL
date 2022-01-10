<?php

class carritoModel extends Model{

    public function __construct(){
        parent::__construct();     
    }

    public function getPedido($data){
        $pedido = array();
        
        try{
            $query = $this->db->connect()->query("SELECT * FROM pedidos WHERE correo = '" . $data['correo'] . "' AND pass = '" . $data['contrasenia'] . "'");
            $row = $query->fetch();
            if($row != false){

            }                                            
            return $pedido;
        }catch(PDOException $e){
            print_r("Error login: " . $e->getMessage());
        }
    }
}