<?php
require_once "usuario.php";
class loginModel extends Model{

    public function __construct(){
        parent::__construct();     
    }

    public function login($data){
        $usuario = array();
        
        try{
            $query = $this->db->connect()->query("SELECT * FROM usuarios WHERE correo = '" . $data['correo'] . "' AND pass = '" . $data['contrasenia'] . "'");
            $row = $query->fetch();
            if($row != false){
                $usuario = array(
                    'id'        => $row['id_usuario'],
                    'username'  => $row['username'],
                    'pass'      => $row['pass'],
                    'nombre'    => $row['nombre'],
                    'apellido'  => $row['apellido'],
                    'direccion' => $row['direccion'],
                    'correo'    => $row['correo'],
                    'telefono'  => $row['telefono'],
                    'tipo'      => $row['tipo']
                );
            }                                            
            return $usuario;
        }catch(PDOException $e){
            print_r("Error login: " . $e->getMessage());
        }
    }
}