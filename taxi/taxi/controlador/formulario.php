<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from registro where Id_registro=".$_GET["Id_registro"];
$query = $con->query($sql1);
$registro = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $registro=$r;
  break;
}
  }
?>
<?php if($registro!=null):?>
 <form role="form" method="post" action="../controlador/actualizar.php">
  <div class="form-group">
    <label for="name">PLACA</label>
    <input type="text" class="form-control" value="<?php echo $registro->Placa; ?>" name="Placa" disabled>
  </div>
  <div class="form-group">
    <label for="lastname">Propietario</label>
    <input type="text" class="form-control" value="<?php echo $registro->Propietario; ?>" name="Propietario" required>
  </div>
  <div class="form-group">
    <label for="address">Conductor</label>
    <input type="text" class="form-control" value="<?php echo $registro->Conductor; ?>" name="Conductor" required>
  </div>
  <div class="form-group">
    <label for="lastname">SOAT ANTERIOR</label>
    <input type="text" class="form-control" value="<?php echo $registro->SOAT; ?>" name="SOAT1" disabled>
  </div>
  <div class="form-group">
     <div class="form-group">
    <label for="SOAT">SOAT NUEVO</label>
    <select class="form-control" name="SOAT" required>
      <option value="">--Seleccione un estado--</option>
      <option value="VIGENTE">VIGENTE</option>
      <option value="VENCIDO">VENCIDO</option>
      </select>
    <!--<input type="email" class="form-control"  >-->
  </div>
  <div class="form-group">
    <label for="lastname">TECNOMECANICA ANTERIOR</label>
    <input type="text" class="form-control" value="<?php echo $registro->TECNOMECANICA; ?>" name="TECNOMECANICA1" disabled>
  </div>
  <div class="form-group">
    <label for="TECNOMECANICA">TECNOMECANICA NUEVA</label>
    <select class="form-control"  name="TECNOMECANICA" required>
      <option value="">--Seleccione un estado--</option>
      <option value="VIGENTE">VIGENTE</option>
      <option value="VENCIDO">VENCIDO</option>
      </select>
   <!-- <input type="text" class="form-control"  >-->
  </div>
   <div class="form-group">
    <label for="lastname">ESTADO ANTERIOR</label>
    <input type="text" class="form-control" value="<?php echo $registro->ESTADO; ?>" name="ESTADO1" disabled>
  </div>
<div class="form-group">
    <label for="ESTADO">ESTADO</label>
     <select class="form-control" name="ESTADO" required>
      <option value="">--Seleccione un estado--</option>
      <option value="ACTIVO">ACTIVO</option>
      <option value="SUSPENDIDO">SUSPENDIDO</option>
      <option value="SANCIONADO">SANCIONADO</option>
      </select>
    <!--<input type="text" class="form-control"  >-->
  </div>
  <br><br>
   <input type="hidden" name="Id_registro" value="<?php echo $registro->Id_registro; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>