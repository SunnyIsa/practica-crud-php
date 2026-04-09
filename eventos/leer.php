<?php
include '../config/db.php';
include '../includes/header.php';

$id = $_GET['id'];

$sql = "select * from eventos_academicos where id = '$id'";
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
        <th>Titulo de evento</th>
        <td><?php echo $fila['titulo_evento']; ?></td>
    </tr>
    <tr>
        <th>Descripcion</th>
        <td><?php echo $fila['descripcion']; ?></td>
    </tr>
    <tr>
        <th>Fecha del evento</th>
        <td><?php echo $fila['fecha_evento']; ?></td>
    </tr>
    <tr>
        <th>Modalidad</th>
        <td><?php echo $fila['modalidad']; ?></td>
    </tr>
    <tr>
        <th>Cupo Maximo</th>
        <td>
            <?php echo $fila['cupo_maximo']; ?>
        </td>
    </tr>
</table>

<a href="index.php" class="btn btn-secondary">Volver</a>
<a href="editar.php?idEd=<?php echo $fila['id']; ?>" class="btn btn-success">Editar</a>


<?php } ?>

<?php
include '../includes/footer.php';
?>