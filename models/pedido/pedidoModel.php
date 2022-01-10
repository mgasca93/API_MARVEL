<?php
require_once "consultarpedido.php";

class pedidoModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    

    public function getPedido($data){
        
        $pedidos = [];
        try{

            $query = $this->db->connect()->query("SELECT * FROM pedidos INNER JOIN platillos WHERE `pedidos`.`id_pedido` = $data[pedido]");            
            while($row = $query->fetch()){
                $pedido = new ConsultarPedido();

                $pedido->nombre         = $row['nombre'];
                $pedido->descripcion    = $row['descripcion'];
                $pedido->precio         = $row['precio'];
                $pedido->fecha          = $row['fecha'];

                array_push($pedidos, $pedido);
            }
           
            return $pedidos;
        }catch(PDOException $e){
            print_r("Error obtener pedido: " . $e->getMessage());
        }
    }
}