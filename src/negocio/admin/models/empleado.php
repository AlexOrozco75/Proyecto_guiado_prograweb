<?php
require_once(__DIR__."/../sistema.class.php");

class Empleado extends sistema {
    
    function leer(){
        $this->conectar();
        // Hacemos JOIN con municipio y negocio para traer sus nombres
        $sql = "SELECT e.*, m.municipio as nombre_municipio, n.negocio as nombre_negocio 
                FROM empleado e 
                LEFT JOIN municipio m ON e.id_municipio = m.id_municipio
                LEFT JOIN negocio n ON e.id_negocio = n.id_negocio";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function leerUno($id){
        $this->conectar();
        $sql = "SELECT e.*, m.municipio as nombre_municipio, n.negocio as nombre_negocio 
                FROM empleado e 
                LEFT JOIN municipio m ON e.id_municipio = m.id_municipio
                LEFT JOIN negocio n ON e.id_negocio = n.id_negocio 
                WHERE e.id_empleado = :id_empleado";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_empleado', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function crear($data){
        $this->conectar();
        $sql = "INSERT INTO empleado (nombre, primer_apellido, segundo_apellido, fecha_nacimiento, rfc, curp, imagen, id_municipio, id_usuario, id_negocio) 
                VALUES (:nombre, :primer_apellido, :segundo_apellido, :fecha_nacimiento, :rfc, :curp, :imagen, :id_municipio, :id_usuario, :id_negocio)";
        $stmt = $this->db->prepare($sql);
        
        // Vinculamos todos los parámetros
        $stmt->bindParam(':nombre', $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':primer_apellido', $data['primer_apellido'], PDO::PARAM_STR);
        $stmt->bindParam(':segundo_apellido', $data['segundo_apellido'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_nacimiento', $data['fecha_nacimiento'], PDO::PARAM_STR);
        $stmt->bindParam(':rfc', $data['rfc'], PDO::PARAM_STR);
        $stmt->bindParam(':curp', $data['curp'], PDO::PARAM_STR);
        $stmt->bindParam(':imagen', $data['imagen'], PDO::PARAM_STR); // Por ahora lo trataremos como texto
        $stmt->bindParam(':id_municipio', $data['id_municipio'], PDO::PARAM_INT);
        $stmt->bindParam(':id_usuario', $data['id_usuario'], PDO::PARAM_INT);
        $stmt->bindParam(':id_negocio', $data['id_negocio'], PDO::PARAM_INT);
        
        $stmt->execute();
        return $stmt->rowCount();
    }

    function actualizar($id, $data){
        $this->conectar(); 
        $sql = "UPDATE empleado SET 
                nombre = :nombre, 
                primer_apellido = :primer_apellido, 
                segundo_apellido = :segundo_apellido, 
                fecha_nacimiento = :fecha_nacimiento, 
                rfc = :rfc, 
                curp = :curp, 
                imagen = :imagen, 
                id_municipio = :id_municipio, 
                id_usuario = :id_usuario, 
                id_negocio = :id_negocio 
                WHERE id_empleado = :id_empleado";
        
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(':nombre', $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':primer_apellido', $data['primer_apellido'], PDO::PARAM_STR);
        $stmt->bindParam(':segundo_apellido', $data['segundo_apellido'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_nacimiento', $data['fecha_nacimiento'], PDO::PARAM_STR);
        $stmt->bindParam(':rfc', $data['rfc'], PDO::PARAM_STR);
        $stmt->bindParam(':curp', $data['curp'], PDO::PARAM_STR);
        $stmt->bindParam(':imagen', $data['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(':id_municipio', $data['id_municipio'], PDO::PARAM_INT);
        $stmt->bindParam(':id_usuario', $data['id_usuario'], PDO::PARAM_INT);
        $stmt->bindParam(':id_negocio', $data['id_negocio'], PDO::PARAM_INT);
        $stmt->bindParam(':id_empleado', $id, PDO::PARAM_INT);
        
        $stmt->execute();
        return $stmt->rowCount();
    }

    function borrar($id){
        $this->conectar();
        $sql = "DELETE FROM empleado WHERE id_empleado = :id_empleado";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_empleado', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }   
}
?>