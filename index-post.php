<?php
include("conexion.php");
$con = conexion();

$doc = $_POST["documento"];
$nom = $_POST["nombre"];
$ape = $_POST["apellido"];
$dir = $_POST["direccion"];
$cel = $_POST["celular"];

$sql = "insert into persona values(default,'$doc','$nom','$ape','$dir','$cel')";
pg_query($con, $sql);

header("location:index.php");
?>