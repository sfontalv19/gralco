<?php
require '/apache/htdocs/gralcoProyecto/basedatos/databases.php';
$DB = conectDB();

$result = $DB->query("SELECT * FROM tareas");
$tareas = [];

while ($row = $result->fetch_assoc()) {
    $tareas[] = $row;
}

echo json_encode($tareas);