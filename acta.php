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
        <h2 class="acta">Llenar Acta</h2>

        <form action="correo.php" method="POST" enctype="multipart/form-data">
            <label class="mensaje-acta" for="acta">Mensaje de Acta:</label>
            <textarea id="acta" name="acta"></textarea>
            
            <button type="button" id="btnStart">COMENZAR</button>
            <button type="button" id="btnEnd">FINALIZAR</button>
          

            <fieldset>
                <legend>Información sobre la reunión</legend>
                <p>Personal que redactó el acta:</p>
                <div class="forma-contacto">
                    <label for="contactar">Sergio Fontalvo</label>
                    <input name="contacto" type="radio" value="Sergio Fontalvo">
                    <label for="contactar-email">Daniel Esquivel</label>
                    <input name="contacto" type="radio" value="Daniel Esquivel">
                </div>

                <p>Incluir fecha y hora de finalización de la reunión:</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" min="00:00" max="23:59">


                <section>
                    <p>objetivos</p>
                    <textarea name="objetivos" id="objetivos"></textarea>
                </section>
            </fieldset>

            <input type="submit" value="Enviar" class="boton-enviar">
        </form>

        <a href="toDo.php">seguimiento a tareas</a>


    </main>

    <footer class="final">
        <p>&copy; Gralco S.A. | Diseñado y Desarrollado por Sergio Fontalvo</p>
    </footer>

    <script src="/js/script.js"></script>
</body>
</html>