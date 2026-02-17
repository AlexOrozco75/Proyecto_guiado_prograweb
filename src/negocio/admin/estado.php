<?php
require_once(__DIR__."/sistema.class.php");
require_once(__dir__."/models/estado.php");
$estado = new Estado();

try {
    
   //$datosEstado = $estado->leerUno(2);   
    

    
       // echo "ID: " . $datosEstado['id_estado'] . " - Nombre: " . $datosEstado['estado'] . "<br>";
     
       
    

/*
    $data = [];
    $data['estado'] = "Baja California Sur"; 
    $cantidad = $estado->crear($data);
  */  
    



    /* update 
    */
    $id_estado=1;
    $data = ['estado' => "aguascalientes"];
    $cantidad= $estado->actualizar($id_estado, $data);
    echo "Cantidad de registros afectados: " . $cantidad;


    

    $estados = $estado->leer(); 
    
    include (__DIR__ . "/views/estados/index.php");

     /* delete 
    */
   
    
} catch(PDOException $e) {
    
}

