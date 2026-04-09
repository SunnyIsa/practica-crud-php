<?php
include '../config/db.php';
if(isset($_GET["idEl"])){
    $id=$_GET["idEl"];
    $sql="delete from eventos_academicos where id=$id";
    $resultado=mysqli_query($con,$sql);
    header("Location: index.php");
}

?>