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
<div class="container">
<div class="row">
<div class="col-md-12 crudY">
    <center><h2>CREAR TAXI</h2></center>
<!-- Button trigger modal -->
<!--  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
<br><br>
   Modal -->
<!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header ">
          <button type="button" class="close boton1" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">-->
        <form role="form" method="post" action="../controlador/agregar.php">
  <div class="form-group">
    <label for="placa">PLACA</label>
    <input type="text" class="form-control" name="Placa" required>
  </div>
  <div class="form-group">
    <label for="propietario">PROPIETARIO</label>
    <input type="text" class="form-control" name="Propietario" required>
  </div>
  <div class="form-group">
    <label for="conductor">CONDUCTOR</label>
    <input type="text" class="form-control" name="Conductor" required>
  </div>
  <div class="form-group">
    <label for="SOAT">SOAT</label>
    <select class="form-control" name="SOAT" required>
      <option value="">-- SELECCIONE --</option>
      <option value="VIGENTE">VIGENTE</option>
      <option value="VENCIDO">VENCIDO</option>
      </select>
    <!--<input type="email" class="form-control"  >-->
  </div>
  <div class="form-group">
    <label for="TECNOMECANICA">TECNOMECANICA</label>
    <select class="form-control" name="TECNOMECANICA" required>
      <option value="">-- SELECCIONE --</option>
      <option value="VIGENTE">VIGENTE</option>
      <option value="VENCIDO">VENCIDO</option>
      </select>
   <!-- <input type="text" class="form-control"  >-->
  </div>
<div class="form-group">
    <label for="ESTADO">ESTADO</label>
     <select class="form-control" name="ESTADO" required>
      <option value="">-- SELECCIONE --</option>
      <option value="ACTIVO">ACTIVO</option>
      <option value="SUSPENDIDO">SUSPENDIDO</option>
      <option value="SANCIONADO">SANCIONADO</option>
      </select>
    <!--<input type="text" class="form-control"  >-->
  </div>
  <br><br>
  <div align="center">
  <button type="submit" class="btn btn-default">Agregar</button>
  <button onclick="location.href='index.php'" class="btn btn-default">Cancelar</button>
  </div>
</form>
 <br><br>
        </div>
<!--    </div> /.modal-content -->
   <!-- </div> /.modal-dialog -->
 <!-- </div> /.modal -->
 </div>
</div>
</div>
 <br><br>
<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>