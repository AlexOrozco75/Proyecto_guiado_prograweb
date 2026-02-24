<h1>Municipios</h1>

<a href="municipio.php?accion=crear" class="btn btn-success mb-3">Nuevo Municipio</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Municipio</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($municipios as $muni): ?>
    <tr>
      <th scope="row"><?php echo $muni['id_municipio']; ?></th>
      
      <td><?php echo $muni['municipio']; ?></td>
      
      <td><?php echo $muni['nombre_estado']; ?></td>
      
      <td>
        <div class="btn-group" role="group" aria-label="Acciones">
          <a href="municipio.php?accion=actualizar&id=<?php echo $muni['id_municipio']; ?>" class="btn btn-warning">Editar</a>
          <a href="municipio.php?accion=borrar&id=<?php echo $muni['id_municipio']; ?>" class="btn btn-danger">Eliminar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>