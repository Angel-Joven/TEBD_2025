<?php
$server = 'localhost'; // Servidor en donde se encuentra ubicado la base de datos
$user = 'root'; // Nombre de usuario de la base de datos
$pass = '1234'; // Contraseña de la base de datos
$db =  'tarea1_tebd'; // Nombre de la base de datos

$conexion_sql = mysqli_connect($server, $user, $pass, $db)or die("Error en la conexion"); // Checamos la conexion
return $conexion_sql;

$conexion_sql->close(); // Cerramos la conexion
?>