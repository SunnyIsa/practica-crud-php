<?php

include '../config/db.php';
if(isset($_GET['idEd'])){
    $id=$_GET['idEd'];
    $sql="select * from eventos_academicos where id=$id";
    $resultado=mysqli_query($con,$sql);
    $evento=mysqli_fetch_array($resultado);
}
if(isset($_GET['actualizar'])){
    $id=$_GET['id'];
    $titulo=$_GET['titulo'];
    $desc=$_GET['descripcion'];
    $fecha=$_GET['fecha'];
    $mod=$_GET['modalidad'];
    $cupo=$_GET['cupo'];
    $sql="update eventos_academicos set id='$id' , titulo_evento='$titulo',descripcion='$desc',fecha_evento='$fecha',modalidad='$mod',cupo_maximo='$cupo'  where id=$id ";
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
            <input type="text" class="form-control" name="id" value="<?php echo $evento['id'];?>"><br>
            <label for="" class="form-label">Titulo del evento:</label>
            <input type="text" class="form-control" name="titulo" value="<?php echo $evento['titulo_evento'];?>"><br>
            <label for="" class="form-label">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="<?php echo $evento['descripcion'];?>"><br>
            <label for="" class="form-label">Fecha del Evento:</label>
            <input type="text" class="form-control" name="fecha" value="<?php echo $evento['fecha_evento'];?>">
            <label for="" class="form-label">Modalidad</label>
            <select class="form-select" id="specificSizeSelect" name="modalidad">
                <option selected><?php echo $evento['modalidad'];?></option>
                <option >Presencial</option>
                <option >Virtual</option>
                <option >Hibrido</option>
                
                </select>
            <label for="" class="form-label">Cupo Maximo:</label>
            <input type="text"class="form-control" name="cupo" value="<?php echo $evento['cupo_maximo'];?>"><br>
            <hr>

            <a href="index.php" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary" name="actualizar">Guardar</button>

        </form>
</body>
</html>
