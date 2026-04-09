<?php
include '../config/db.php';
if(isset($_GET['crear'])){
    $id=$_GET['id'];
    $titulo=$_GET['titulo'];
    $desc=$_GET['descripcion'];
    $fecha=$_GET['fecha'];
    $mod=$_GET['modalidad'];
    $cupo=$_GET['cupo'];

    $sql="insert into eventos_academicos (id,titulo_evento,descripcion,fecha_evento,modalidad,cupo_maximo) values('$id','$titulo','$desc','$fecha','$mod','$cupo')";
    $resultado=mysqli_query($con,$sql);
    header("Location: index.php");
}

?>