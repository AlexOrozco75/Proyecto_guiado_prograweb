<h1>Actualizar Empleado</h1>

<form action="empleado.php?accion=actualizar&id=<?php echo $id; ?>" method="POST">
    
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="nombre" class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data['nombre']; ?>" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="primer_apellido" class="form-label">Primer Apellido</label>
            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="<?php echo $data['primer_apellido']; ?>" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="<?php echo $data['segundo_apellido']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $data['fecha_nacimiento']; ?>" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="rfc" class="form-label">RFC</label>
            <input type="text" class="form-control" id="rfc" name="rfc" value="<?php echo $data['rfc']; ?>" maxlength="13" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="curp" class="form-label">CURP</label>
            <input type="text" class="form-control" id="curp" name="curp" value="<?php echo $data['curp']; ?>" maxlength="18" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="imagen" class="form-label">Nombre del archivo de imagen</label>
        <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $data['imagen']; ?>">
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="id_municipio" class="form-label">Municipio</label>
            <select class="form-control" id="id_municipio" name="id_municipio" required>
                <option value="">Selecciona...</option>
                <?php foreach($municipios_lista as $muni): ?>
                    <option value="<?php echo $muni['id_municipio']; ?>" <?php if($muni['id_municipio'] == $data['id_municipio']) echo 'selected'; ?>>
                        <?php echo $muni['municipio']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="col-md-4 mb-3">
            <label for="id_negocio" class="form-label">Negocio asignado</label>
            <select class="form-control" id="id_negocio" name="id_negocio" required>
                <option value="">Selecciona...</option>
                <?php foreach($negocios_lista as $neg): ?>
                    <option value="<?php echo $neg['id_negocio']; ?>" <?php if($neg['id_negocio'] == $data['id_negocio']) echo 'selected'; ?>>
                        <?php echo $neg['negocio']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label for="id_usuario" class="form-label">ID de Usuario (Sistema)</label>
            <input type="number" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $data['id_usuario']; ?>">
        </div>
    </div>

    <div class="mt-3">
        <input type="submit" class="btn btn-primary" name="enviar" value="Guardar Cambios">
        <a href="empleado.php" class="btn btn-secondary">Cancelar</a>
    </div>
</form>