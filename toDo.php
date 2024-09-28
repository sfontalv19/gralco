<?php
require '/apache/htdocs/gralcoProyecto/basedatos/databases.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="./js/script.js"></script>
    <title>Verificación de Tareas</title>
</head>
<body class="todoclass">
    <h1 class="toDoh1">Lista de Tareas</h1>
    <input type="text" id="nuevaTarea"  placeholder="Ingrese una nueva tarea">
    <button onclick="agregarTarea()"  >Agregar Tarea</button>
    <a href="/acta.php"  > guardar y salir</a>
    <ul id="listaDeTareas"></ul>
</body>
</html>