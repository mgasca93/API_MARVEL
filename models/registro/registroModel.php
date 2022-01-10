<?php 

class registroModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function registrar($data){                    
        try{
            $query = $this->db->connect()->query("SELECT * FROM usuarios WHERE correo = '" . $data['correo'] . "'");
            $row = $query->fetch();                                                    
            if($row != false){
               return false;
            }else{
                $query = $this->db->connect()->prepare("INSERT INTO usuarios(username, pass, nombre, apellido, direccion, correo, telefono, tipo) VALUES(:username, :pass, :nombre, :apellido, :direccion, :correo, :telefono, :tipo)");
                $query->execute(['username' => $data['username'], 'pass' => $data['pass'], 'nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'direccion' => $data['direccion'], 'correo' => $data['correo'], 'telefono' => $data['telefono'], 'tipo' => '2']);
                return true;
            }
        }catch(PDOException $e){
            print_r("Error registro: " . $e->getMessage());
        }
    }
}