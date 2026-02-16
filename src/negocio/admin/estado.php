<?php
require_once(__DIR__."/sistema.class.php");
require_once(__dir__."/models/estado.php");
$estado = new Estado();

try {
    
   //$datosEstado = $estado->leerUno(2);   
    

    
       // echo "ID: " . $datosEstado['id_estado'] . " - Nombre: " . $datosEstado['estado'] . "<br>";
     

    $data = [];
    $data['estado'] = "Baja California Sur"; 
    $cantidad = $estado->crear($data);
    echo "Cantidad de registros afectados: " . $cantidad;

    // 3. Corregir $app por $estado para obtener la lista completa
    $estados = $estado->leer(); 
    
    include (__DIR__ . "/views/estados/index.php"); // Nota: corregí la ruta a plural 'estados'
      
} catch(PDOException $e) {
    
}

