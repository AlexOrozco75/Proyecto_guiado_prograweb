<h1>Entidades federativas</h1>

<tr>
<table>
    <th>ID</th>
    <th>Estado</th>
</tr>
<?php
foreach ($estados as $estado):?>
<tr>
<table>
    <td><?php echo $estado['id_estado']; ?></td>

    <td><?php echo $estado['estado']; ?></td>
</tr>
    
<?php endforeach; ?>
 </table>