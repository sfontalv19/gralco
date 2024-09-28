<?php

function conectDB(): mysqli {
    $DB = mysqli_connect('localhost', 'root', 'sergio123', 'gralcouser');

    if (!$DB) {
        // Manejar el error de conexión, como imprimir un mensaje de error o lanzar una excepción
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $DB->set_charset('utf8');

    return $DB;
}
