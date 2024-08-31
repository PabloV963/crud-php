<?php
if(!empty($_POST)){
    if(isset($_POST["Propietario"]) &&isset($_POST["Conductor"]) &&isset($_POST["SOAT"]) &&isset($_POST["TECNOMECANICA"])  &&isset($_POST["ESTADO"])){
        if($_POST["Propietario"]!="" &&$_POST["Conductor"]!=""){
            include "conexion.php";
                $sql = "update registro set Propietario=\"$_POST[Propietario]\",Conductor=\"$_POST[Conductor]\",  SOAT=\"$_POST[SOAT]\",TECNOMECANICA=\"$_POST[TECNOMECANICA]\",ESTADO=\"$_POST[ESTADO]\" where Id_registro=".$_POST["Id_registro"];
            $query = $con->query($sql);
            if($query!=null){
                print "<script>alert(\"Actualizado exitosamente.\");window.location='../vista/editar.php';</script>";
            }else{
                print "<script>alert(\"No se pudo actualizar.\");window.location='../vista/editar.php';</script>";
            }
        }
    }
}?>
