<?php
require '/apache/htdocs/gralcoProyecto/basedatos/databases.php';
$DB = conectDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = $_POST['texto'];
    $color = $_POST['color'];

    if (!empty($texto) && !empty($color)) {
        $stmt = $DB->prepare("INSERT INTO tareas (texto, color) VALUES (?, ?)");
        $stmt->bind_param("ss", $texto, $color);
        $stmt->execute();
        $stmt->close();
    }
}