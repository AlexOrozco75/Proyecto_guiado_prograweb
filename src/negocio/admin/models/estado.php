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



    function leerUno($id){

        $this->conectar();
        $sql = "SELECT * FROM estado WHERE id_estado = :id_estado";
        $stmt = $this->db->prepare(query: $sql);
        $stmt->bindParam(':id_estado', var:$id,type: PDO::PARAM_INT);
        $stmt->execute();
        $estados = $stmt->fetch(PDO::FETCH_ASSOC);
        return $estados;
    }

    function crear($data){
        $this->conectar();
        $sql = "INSERT INTO estado (estado) VALUES (:estado)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':estado', $data['estado'], PDO::PARAM_STR);
        $resultado = $stmt->execute();
        $cantidad = $stmt->rowCount();
        return $cantidad;

    }

   function actualizar($id, $data) { // Recibe el ID y el arreglo de datos 

    $this->conectar(); // Establece conexión mediante PDO 
    $sql = "UPDATE estado SET estado = :estado WHERE id_estado = :id_estado";
    
    $stmt = $this->db->prepare($sql);
    
    // Vinculación de parámetros para seguridad 
    $stmt->bindParam(':estado', $data['estado'], PDO::PARAM_STR);
    $stmt->bindParam(':id_estado', $id, PDO::PARAM_INT);
    
    $stmt->execute();
    
    // Guardamos el conteo en una variable y la retornamos
    $cantidad = $stmt->rowCount(); 
    return $cantidad;
}


    function borrar(){

    $this->conectar();
    $sql = "DELETE FROM estado WHERE id_estado = :id_estado";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id_estado', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->rowCount();

    }   
}