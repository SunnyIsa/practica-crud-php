<?php
include '../config/db.php';
include '../includes/header.php';
?>
<h2>Equipos</h2>
<hr>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo </button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Registrar nuevo equipo</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="crear.php" method="GET">
            <label for="" class="form-label">Id:</label>
            <input type="text" class="form-control" name="id"><br>
            <label for="" class="form-label">Numero de Serie:</label>
            <input type="text" class="form-control" name="numero"><br>
            <label for="" class="form-label">Nombre de Equipo:</label>
            <input type="text" class="form-control" name="nombre"><br>
            <label for="" class="form-label">Tipo:</label>
            
            <select class="form-select" id="specificSizeSelect" name="tipo">
                <option selected>Computadora</option>
                <option >Proyector</option>
                <option >Servidor</option>
                <option >Redes</option>
                </select>
            <label for="" class="form-label">Fecha de Adquisicion:</label>
            <input type="text"class="form-control" name="fecha"><br>
            <label for="" class="form-label" >Estado Operativo</label>
                <select class="form-select" id="specificSizeSelect" name="estado">
                <option selected>Activo</option>
                <option >En Reparacion</option>
                </select>
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
            <th>Numero de Serie</th>
            <th>Nombre de Equipo</th>
            <th>Tipo</th>
            <th>Fecha de Adquisicion</th>
            <th>Estado Operativo</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="select * from equipos_laboratorio";
        $resultado=mysqli_query($con,$sql);
        while($fila=mysqli_fetch_array($resultado)){?>
            <tr>
                <td><?php echo $fila["numero_serie"]?></td>
                <td><?php echo $fila["nombre_equipo"]?></td>
                <td><?php echo $fila["tipo"]?></td>
                <td><?php echo $fila["fecha_adquisicion"]?></td>
                <td><?php if($fila["estado_operativo"]==1){echo "Activo";} else{echo " En Reparacion";} ?></td>
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