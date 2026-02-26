<h1>Listado de Negocios</h1>

<a href="negocio.php?accion=crear" class="btn btn-success mb-3">Nuevo Negocio</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre del Negocio</th>
      <th scope="col">Municipio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($negocios as $neg): ?>
    <tr>
      <th scope="row"><?php echo $neg['id_negocio']; ?></th>
      
      <td><?php echo $neg['negocio']; ?></td>
      
      <td><?php echo $neg['nombre_municipio']; ?></td>
      
      <td>
        <div class="btn-group" role="group" aria-label="Acciones">
          <a href="negocio.php?accion=actualizar&id=<?php echo $neg['id_negocio']; ?>" class="btn btn-warning">Editar</a>
          <a href="negocio.php?accion=borrar&id=<?php echo $neg['id_negocio']; ?>" class="btn btn-danger">Eliminar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>