<?php

require '/apache/htdocs/gralcoProyecto/basedatos/databases.php';
$DB = conectDB();

$user = "sergio";
$password = "123456";
$correo = "correo@correo.com";


$user = "fontalvo";
$password = "123456";
$correo = "serme1009@gmail.com";



// Restricción de contraseña 
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Query para crear el usuario
$query = "INSERT INTO users (usuario, contrasena, correo) VALUES ('$user', '$passwordHash', '$correo')";


// Para agregarlo a la base de datos
mysqli_query($DB, $query);