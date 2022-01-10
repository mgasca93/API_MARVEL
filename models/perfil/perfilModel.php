<?php

require_once "pedidos.php";
class perfilModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    

    public function getPedidos($userID){
        $pedidos = [];
        try{

            $query = $this->db->connect()->query("SELECT id_pedido, fecha FROM pedidos WHERE id_usuario = '" . $userID ."'");

            while($row = $query->fetch()){
                $pedido = new Pedidos();

                $pedido->id     = $row['id_pedido'];
                $pedido->fecha  = $row['fecha'];                

                array_push($pedidos, $pedido);
            }

            return $pedidos;
        }catch(PDOException $e){
            print_r("Error obtener los pedidos: " . $e->getMessage());
        }
    }
}