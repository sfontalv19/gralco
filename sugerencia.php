<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header"></header>
    <main class="contenedor seccion">
        <a class="portalDeEmpleados" href="index.php"> 
            <img class="logo-azul" src="LOGO-GRALCO-SIN-FONDO.png" alt="">
        </a>
        <h1 class="acta">Datos de la Reunion</h1>
        <h2 class="acta">sugerencias</h2>

        <form action="correo.php" method="POST" enctype="multipart/form-data">
            <label class="mensaje-acta" for="acta">sugerencias o notas</label>
            <textarea id="acta" name="acta"></textarea>
            
         
</body>
</html>