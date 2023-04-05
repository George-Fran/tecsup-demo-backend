<?php
include("conexion.php");
$con = conexion();

$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$celular = $_POST["celular"];

$sql = "insert into persona values(default,'$documento','$nombre','$apellido','$direccion','$celular')";
pg_query($con, $sql);

header("location:index.php");
?>