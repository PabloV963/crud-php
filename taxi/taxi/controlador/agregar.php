<?php
if(!empty($_POST)){
    if(isset($_POST["Placa"]) &&isset($_POST["Propietario"]) &&isset($_POST["Conductor"]) &&isset($_POST["SOAT"]) &&isset($_POST["TECNOMECANICA"])&&isset($_POST["ESTADO"]))
    {
        if($_POST["SOAT"]!=""&& $_POST["TECNOMECANICA"]!=""&&$_POST["ESTADO"]!=""){
            include "conexion.php";
                $sql = "insert into registro(Placa,Propietario,Conductor,SOAT,TECNOMECANICA,ESTADO) value (\"$_POST[Placa]\",\"$_POST[Propietario]\",\"$_POST[Conductor]\",\"$_POST[SOAT]\",\"$_POST[TECNOMECANICA]\",\"$_POST[ESTADO]\")";
            $query = $con->query($sql);
            if($query!=null){
                print "<script>alert(\"Agregado exitosamente.\");window.location='../vista/ver.php';</script>";
            }else{
                print "<script>alert(\"No se pudo agregar.\");window.location='../vista/index.php';</script>";
            }
        }
    }
}
?>

