<?php
include '../config/db.php';
include '../includes/header.php';

$id = $_GET['id'];

$sql = "select * from equipos_laboratorio where id = '$id'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
?>

<h2>Detalle del Equipo</h2>
<hr>

<?php if($fila){ ?>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <td><?php echo $fila['id']; ?></td>
    </tr>
    <tr>
        <th>Numero de Serie</th>
        <td><?php echo $fila['numero_serie']; ?></td>
    </tr>
    <tr>
        <th>Nombre de Equipo</th>
        <td><?php echo $fila['nombre_equipo']; ?></td>
    </tr>
    <tr>
        <th>Tipo</th>
        <td><?php echo $fila['tipo']; ?></td>
    </tr>
    <tr>
        <th>Fecha de Adquisicion</th>
        <td><?php echo $fila['fecha_adquisicion']; ?></td>
    </tr>
    <tr>
        <th>Estado Operativo</th>
        <td>
            <?php
            if($fila['estado_operativo'] == 1){
                echo "Activo";
            }else{
                echo "En Reparacion";
            }
            ?>
        </td>
    </tr>
</table>

<a href="index.php" class="btn btn-secondary">Volver</a>
<a href="editar.php?idEd=<?php echo $fila['id']; ?>" class="btn btn-success">Editar</a>


<?php } ?>

<?php
include '../includes/footer.php';
?>
