<?php

require_once(__dir__."/../sistema.class.php");
class Estado extends sistema{
    function leer(){

        $this->conectar();
        $sql = "SELECT * FROM estado";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $estados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $estados;

    }

    

    function leerUno(){
    
    }
    function crear(){
    }
    function actualizar(){

    }
    function borrar(){

    }   
}