<?php
 
include "conexion.php";
$user_id=null;
$sql1= "select * from registro";
$query = $con->query($sql1);
?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover crudX">
<thead>
    <th>Cod</th>
    <th>Placa</th>
    <th>Propietario</th>
    <th>Conductor</th>
    <th>SOAT</th>
    <th>TECNOMECANICA</th>
    <th>ESTADO</th>
    <th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
    <tr>
    <td><?php echo $r["Id_registro"]; ?></td>
    <td><?php echo $r["Placa"]; ?></td>
    <td><?php echo $r["Propietario"]; ?></td>
    <td><?php echo $r["Conductor"]; ?></td>
    <td><?php echo $r["SOAT"]; ?></td>
    <td><?php echo $r["TECNOMECANICA"]; ?></td>
    <td><?php echo $r["ESTADO"]; ?></td>
    <td style="width:150px;">       
        <a href="#" id="del-<?php echo $r["Id_registro"];?>" class="btn btn-sm btn-danger">Eliminar</a>
        <script>
        $("#del-"+<?php echo $r["Id_registro"];?>).click(function(e){
            e.preventDefault();
            p = confirm("Estas seguro de eliminar este taxi? Esta operación no se puede retroceder");
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