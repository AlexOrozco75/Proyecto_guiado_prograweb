<?php
require_once(__DIR__."/sistema.class.php");
require_once(__dir__."/models/estado.php");
$estado = new Estado();

try{
      $estados = $estado->leer();   
    foreach($estados as $estado){
        echo "ID: ".$estado['id_estado']." - Nombre: ".$estado['estado']."<br>";

    }
}
    catch(PDOException $e){
        echo "Error: ".$e->getMessage();

}

