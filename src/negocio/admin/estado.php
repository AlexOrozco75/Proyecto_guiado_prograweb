<?php
require_once(__DIR__."/sistema.class.php");
// Es buena práctica mantener __DIR__ en mayúsculas por consistencia
require_once(__DIR__."/models/estado.php"); 

$estado = new Estado();

$id = isset($_GET['id']) ? $_GET['id'] : null;
$accion = isset($_GET['accion']) ? $_GET['accion'] : null;

include_once(__DIR__."/views/header.php");

switch($accion){

    case 'crear':
        if(isset($_POST['estado'])){
            // 1. Si enviaron el formulario, guardamos los datos
            $data = $_POST;
            $cantidad = $estado->crear($data);

            // 2. Evaluamos el resultado DENTRO de este bloque
            if($cantidad){
                $estado->alerta("success", "Registro creado exitosamente.");
            } else {  
                $estado->alerta("danger", "Error al crear el registro.");
            }
            
            // 3. Mostramos la tabla principal
            $estados = $estado->leer();
            require(__DIR__."/views/estados/index.php");

        } else {
            // Si NO enviaron el formulario (método GET), solo mostramos el form
            require(__DIR__."/views/estados/formulario_crear.php");
        }
        break;

    case 'actualizar':
        if(isset($_POST['estado'])){
            // 1. Si enviaron el formulario, actualizamos
            $data = $_POST;
            $cantidad = $estado->actualizar($id, $data);

            // 2. Evaluamos el resultado DENTRO de este bloque (mensajes corregidos)
            if($cantidad){
                $estado->alerta("success", "Registro actualizado exitosamente.");
            } else {
                $estado->alerta("danger", "Error al actualizar el registro.");
            }

            // 3. Mostramos la tabla principal
            $estados = $estado->leer();
            require(__DIR__."/views/estados/index.php");

        } else {
            // Si NO enviaron el formulario, cargamos los datos y mostramos el form
            $data = $estado->leerUno($id);
            require(__DIR__."/views/estados/formulario_actualizar.php");
        }
        break;

    case 'borrar':
        $cantidad = $estado->borrar($id);
        
        // Unificamos el uso de tu método de alertas
        if($cantidad){
            $estado->alerta("success", "Registro borrado exitosamente.");
        } else {
            $estado->alerta("danger", "Error al borrar el registro.");
        }
        
        $estados = $estado->leer();
        require(__DIR__."/views/estados/index.php");
        break;
    
    case 'leer':
    default:
        $estados = $estado->leer();
        require(__DIR__."/views/estados/index.php");
        break;
} // Fin del switch

// Eliminada la llave de cierre extra que estaba aquí.

include_once(__DIR__."/views/footer.php");
?>