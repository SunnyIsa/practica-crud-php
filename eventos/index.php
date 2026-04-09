<?php
include '../config/db.php';
include '../includes/header.php';
?>
<h2>Eventos</h2>
<hr>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo </button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Registrar nuevo evento</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="crear.php" method="GET">
            <label for="" class="form-label">Id:</label>
            <input type="text" class="form-control" name="id"><br>
            <label for="" class="form-label">Titulo del evento:</label>
            <input type="text" class="form-control" name="titulo"><br>
            <label for="" class="form-label">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion"><br>
            <label for="" class="form-label">Fecha del Evento:</label>
            <input type="text" class="form-control" name="fecha">
            <label for="" class="form-label">Modalidad</label>
            <select class="form-select" id="specificSizeSelect" name="modalidad">
                <option selected>Presencial</option>
                <option >Virtual</option>
                <option >Hibrido</option>
                
                </select>
            <label for="" class="form-label">Cupo Maximo:</label>
            <input type="text"class="form-control" name="cupo"><br>

            <hr>

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancelar</button>
            <button type="submit" class="btn btn-primary" name="crear">Guardar</button>

        </form>
      </div>
    </div>
  </div>
</div>

<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Titulo de Evento</th>
            <th>Descripicion</th>
            <th>Fecha del Evento</th>
            <th>Modalidad</th>
            <th>Cupo Maximo</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="select * from eventos_academicos";
        $resultado=mysqli_query($con,$sql);
        while($fila=mysqli_fetch_array($resultado)){?>
            <tr>
                <td><?php echo $fila["titulo_evento"]?></td>
                <td><?php echo $fila["descripcion"]?></td>
                <td><?php echo $fila["fecha_evento"]?></td>
                <td><?php echo $fila["modalidad"]?></td>
                <td><?php echo $fila["cupo_maximo"] ?></td>
                <td><a href="eliminar.php?idEl=<?php echo $fila['id'];?>"class="btn btn-danger">Eliminar</a></td>
                <td><a href="editar.php?idEd=<?php echo $fila['id'];?>" class="btn btn-success"  >Editar</a></td>
                <td><a href="leer.php?id=<?php echo $fila['id']; ?>" class="btn btn-info">Leer</a></td>

            </tr>
        <?php
        } 
        ?>
    </tbody>
</table>
<?php
include '../includes/footer.php';
?>