<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from registro where Conductor like '%$_GET[Conductor]%'";
$query = $con->query($sql1);
$san=0;
$susp=0;
?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
<th>COD</th>
    <th>PLACA</th>
    <th>PROPIETARIO</th>
    <th>CONDUCTOR</th>
    <th>SOAT</th>
    <th>TECNOMECANICA</th>
    <th>ESTADO</th>
    <th></th>
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
    <td style="width:150px;">
        <a href="./editar.php?Id_registro=<?php echo $r["Id_registro"];?>" class="btn btn-sm btn-warning">Editar</a>
        <a href="./eliminar.php?Id_registro=<?php echo $r["Id_registro"];?>" class="btn btn-sm btn-danger">Eliminar</a>
        <script>
        $("#del-"+<?php echo $r["Id_registro"];?>).click(function(e){
            e.preventDefault();
            p = confirm("Estas seguro?");
            if(p){
                window.location="../controlador/eliminar.php?Id_registro="+<?php echo $r["Id_registro"];?>;
            }
        });
        </script>
    </td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
