<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from registro";
$query = $con->query($sql1);
$san=0;
$susp=0;
?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover crudX">
<thead>
    <th>COD</th>
    <th>PLACA</th>
    <th>PROPIETARIO</th>
    <th>CONDUCTOR</th>
    <th>SOAT</th>
    <th>TECNOMECANICA</th>
    <th>ESTADO</th>
    </thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
    <td><?php echo $r["Id_registro"]; ?></td>
    <td><?php echo $r["Placa"]; ?></td>
    <td><?php echo $r["Propietario"]; ?></td>
    <td><?php echo $r["Conductor"]; ?></td>
    <td><?php echo $r["SOAT"]; ?></td>
    <td><?php echo $r["TECNOMECANICA"]; ?></td>
<?php if($r["ESTADO"]=="SUSPENDIDO"):?>
    <?php $susp++; ?>
    <td class="suspendido"><?php echo $r["ESTADO"]; ?></td>
<?php else: ?>
<?php if($r["ESTADO"]=="SANCIONADO"):?>
    <?php $san++; ?>
    <td class="sancionado"><?php echo $r["ESTADO"]; ?></td>
<?php else:?>
        <td class="activo"><?php echo $r["ESTADO"]; ?></td>
<?php endif;?>
<?php endif;?>
</tr>
<?php endwhile;?>
</table>
<?php if($susp>0):?>
<p class="alert alertwarning suspendido">Alerta: Hay <?php echo $susp ?> taxis en estado SUSPENDIDO
</p><br>
<?php endif;?>
<?php if($san>0):?>
<p class="alert alert-warning sancionado">Alerta: Hay <?php echo $san ?> taxis en estado SANCIONADO</p><br>
<?php endif;?>
<?php if($san==0 && $susp==0):?>
<p class="alert alert-warning activo">FELICIDADES: Todos los taxis en estado ACTIVO</p><br>
<?php endif;?>  
    <?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>