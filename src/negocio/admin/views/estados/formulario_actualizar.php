<h1>Actualizar estado</h1>
<form action="estado.php?accion=actualizar&id=<?php echo $id; ?>" method="POST">
    <label for="">Nombre del estado</label>
    <input type="text" name="estado" value="<?php echo $data['estado']; ?>" >
    <input type="submit" name="enviar" value="Guardar">
    
    
</form>