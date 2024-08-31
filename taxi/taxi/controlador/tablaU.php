<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from registro";
$query = $con->query($sql1);
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
    <td style="width:150px;">
        <a href="./editar_no.php?Id_registro=<?php echo $r["Id_registro"];?>" class="btn btn-sm btn-warning">Editar</a>
    <script>
        $("#del-"+<?php echo $r["Id_registro"];?>).click(function(e){
            e.preventDefault();
            p = confirm("Estas seguro?");
            if(p){
                window.location="./controlador/eliminar.php?Id_registro="+<?php echo $r["Id_registro"];?>;
            }
        });
        </script>
    </td>
<?php endwhile;?>
</table>
<?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
