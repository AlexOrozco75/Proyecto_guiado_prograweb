<h1>Actualizar Municipio</h1>

<form action="municipio.php?accion=actualizar&id=<?php echo $id; ?>" method="POST">
    
    <div class="mb-3">
        <label for="municipio" class="form-label">Nombre del municipio</label>
        <input type="text" class="form-control" id="municipio" name="municipio" value="<?php echo $data['municipio']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="id_estado" class="form-label">Pertenece al Estado:</label>
        <select class="form-control" id="id_estado" name="id_estado" required>
            <option value="">Selecciona un estado...</option>
            
            <?php foreach($estados_lista as $est): ?>
                
                <option value="<?php echo $est['id_estado']; ?>" <?php if($est['id_estado'] == $data['id_estado']) echo 'selected'; ?>>
                    <?php echo $est['estado']; ?>
                </option>
                
            <?php endforeach; ?>
            
        </select>
    </div>

    <input type="submit" class="btn btn-primary" name="enviar" value="Guardar Cambios">
    
    <a href="municipio.php" class="btn btn-secondary">Cancelar</a>
</form>