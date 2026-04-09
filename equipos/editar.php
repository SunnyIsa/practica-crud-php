<?php

include '../config/db.php';
if(isset($_GET['idEd'])){
    $id=$_GET['idEd'];
    $sql="select * from equipos_laboratorio where id=$id";
    $resultado=mysqli_query($con,$sql);
    $equipo=$resultado->fetch_assoc();
}
if(isset($_GET['actualizar'])){
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
    $sql="update equipos_laboratorio set id='$id' , numero_serie='$numero',nombre_equipo='$nombre',tipo='$tipo',fecha_adquisicion='$fecha',estado_operativo='$estado'  where id=$id ";
    $resultado=mysqli_query($con,$sql);
    header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            margin:20px;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
            <label for="" class="form-label">Id:</label>
            <input type="text" class="form-control" name="id" value="<?php echo $equipo['id'];?>" ><br>
            <label for="" class="form-label">Numero de Serie:</label>
            <input type="text" class="form-control" name="numero" value="<?php echo $equipo['numero_serie'];?>"><br>
            <label for="" class="form-label">Nombre de Equipo:</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $equipo['nombre_equipo'];?>"><br>
            <label for="" class="form-label">Tipo:</label>
            
            <select class="form-select" id="specificSizeSelect" name="tipo" >
                <option selected><?php echo $equipo['tipo'];?></option>
                <option >Computadora</option>
                <option >Proyector</option>
                <option >Servidor</option>
                <option >Redes</option>
                </select>
            <label for="" class="form-label">Fecha de Adquisicion:</label>
            <input type="text"class="form-control" name="fecha" value="<?php echo $equipo['fecha_adquisicion'];?>"><br>
            <label for="" class="form-label" >Estado Operativo</label>
                <select class="form-select" id="specificSizeSelect" name="estado">
                <option selected><?php if($equipo["estado_operativo"]==1){echo "Activo";} else{echo "En Reparacion";} ?></option>
                <option >Activo</option>
                <option >En Reparacion</option>
                </select>
            <hr>

            <a href="index.php" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary" name="actualizar">Guardar</button>

        </form>
</body>
</html>
