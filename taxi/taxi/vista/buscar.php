<html>
  <head>
    <title>.: TAXI - LA MANCHA AMARILLA :.</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
     <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet"> 
    <script src="js/jquery.min.js"></script>
  </head>
  <body>
  <?php include "../controlador/navbar.php"; ?>
<div class="container crudY">
<div class="row">
<div class="col-md-12">
    <center><h2>BUSCAR TAXI</h2></center>
<p class="intro_buscar">Selecciona el tipo de busqueda: Placa - Propietario - Conductor - Estado</p>
<div class="cajas_buscar"> 
<form class="navbar-form navbar-center" role="search" action="./buscar_placa.php">
      <div class="form-group">
      <input type="text" name="Placa" class="form-control" placeholder="Buscar Placa" required>
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
 
</form>
 
<form class="navbar-form navbar-center" role="search" action="./buscar_prop.php">
      <div class="form-group">
        <input type="text" name="Propietario" class="form-control" placeholder="Buscar Propietario" required>
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
</form>
 
<form class="navbar-form navbar-center" role="search" action="./buscar_cond.php">
      <div class="form-group">
        <input type="text" name="Conductor" class="form-control" placeholder="Buscar Conductor" required>
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
 
    </form>
 
 <form class="navbar-form navbar-center" role="search" action="./buscar_estado.php">
      <div class="form-group">
        <select name="Estado" class="form-control" placeholder="Buscar Estado">
        <option value="">--SELECCIONE UNA OPCION--</option>
        <option value="ACTIVO">ACTIVO</option>
        <option value="SUSPENDIDO">SUSPENDIDO</option>
        <option value="SANCIONADO">SANCIONADO</option>
        </select>
      </div>}
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
 
 </form>
</div>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>