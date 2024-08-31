<?php
if(!empty($_GET)){

    include "conexion.php";       
    $sql = "DELETE FROM registro WHERE Id_registro=".$_GET["Id_registro"];
    $query = $con->query($sql);
    if($query!=null){
        print "<script>alert(\"Eliminado exitosamente.\");window.location='../vista/ver.php';</script>";
    }else{
        print "<script>alert(\"No se pudo eliminar.\");window.location='../vista/ver.php';</script>";
    }
}
?>
