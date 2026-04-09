<?php
include '../config/db.php';
if(isset($_GET['crear'])){
    $id=$_GET['id'];
    $numero=$_GET['numero'];
    $nombre=$_GET['nombre'];
    $tipo=$_GET['tipo'];
    $fecha=$_GET['fecha'];
    if($_GET["estado"]=="Activo"){
        $estado=1;
    }
    elseif($_GET["estado"]=="En Reparacion"){
        $estado=0;
    }
    $sql="insert into equipos_laboratorio (id,numero_serie,nombre_equipo,tipo,fecha_adquisicion,estado_operativo) values('$id','$numero','$nombre','$tipo','$fecha','$estado')";
    $resultado=mysqli_query($con,$sql);
    header("Location: index.php");
}

?>