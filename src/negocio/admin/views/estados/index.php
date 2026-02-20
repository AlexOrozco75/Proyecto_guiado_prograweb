

<tr>
<h1>Entidades federativas</h1>
<a href="estado.php?accion=crear"   class="btn btn-success">Nuevo</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
</tr>
<?php
foreach ($estados as $estado):?>
<tr>
      <th   <td><?php echo $estado['id_estado']; ?></td> </th>
      <td> <td><?php echo $estado['estado']; ?></td>  </td>
      <td>

      <div class="btn-group" role="group" aria-label="Basic example">
    <a href="estado.php?accion=actualizar&id=<?php   echo $estado["id_estado"];  ?>"class="btn btn-warning">editar</a>

    <a href="estado.php?accion=borrar&id=<?php   echo $estado["id_estado"];  ?>" class="btn btn-danger">eliminar</a>
</div>
      </td>
      <td></td>
    </tr>

    
<?php endforeach; ?>
 </tbody>
</table>
 