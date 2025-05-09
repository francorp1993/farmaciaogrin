<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$mensaje_form = $_POST['mensaje'];

// $conexion =  mysqli_connect('localhost', 'root', '', 'desarrollo_php_wordpress_643') or exit ("No se pudo conectar a la base de datos");

$conexion =  mysqli_connect('sql303.infinityfree.com', 'if0_38704694', 'Piacentini10', 'if0_38704694_wordpress_php') or exit ("No se pudo conectar a la base de datos");


mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form')");
mysqli_close($conexion);

header("location: contacto.php?ok");