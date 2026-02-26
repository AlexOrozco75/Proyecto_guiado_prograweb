<h1>Actualizar Negocio</h1>

<form action="negocio.php?accion=actualizar&id=<?php echo $id; ?>" method="POST">
    
    <div class="mb-3">
        <label for="negocio" class="form-label">Nombre del Negocio</label>
        <input type="text" class="form-control" id="negocio" name="negocio" value="<?php echo $data['negocio']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="id_municipio" class="form-label">Municipio donde se ubica:</label>
        <select class="form-control" id="id_municipio" name="id_municipio" required>
            <option value="">Selecciona un municipio...</option>
            
            <?php foreach($municipios_lista as $muni): ?>
                <option value="<?php echo $muni['id_municipio']; ?>" <?php if($muni['id_municipio'] == $data['id_municipio']) echo 'selected'; ?>>
                    <?php echo $muni['municipio']; ?>
                </option>
            <?php endforeach; ?>
            
        </select>
    </div>

    <input type="submit" class="btn btn-primary" name="enviar" value="Guardar Cambios">
    <a href="negocio.php" class="btn btn-secondary">Cancelar</a>
    
</form>