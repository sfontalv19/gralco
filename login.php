<?php

require '/apache/htdocs/gralcoProyecto/basedatos/databases.php';
$DB = conectDB();

$mistake = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $users = htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8');
    $email = mysqli_real_escape_string($DB, filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($DB, $_POST['contrasena']);

    if (!$users) {
        $mistake[] = "El usuario no es válido";
    }

    if (!$email) {
        $mistake[] = "El correo electrónico es obligatorio o no es válido";
    }

    if (!$password) {
        $mistake[] = 'La contraseña es obligatoria';
    }

    if (empty($mistake)) {
        // revisar si el usuario existe

        $query = "SELECT * FROM users WHERE usuario ='$users' ";
        $resultado = mysqli_query($DB, $query);

        if ($resultado->num_rows) {
            $users = mysqli_fetch_assoc($resultado);
        
            // Verificar si el password es correcto
            if (isset($users['contrasena']) && password_verify($password, $users['contrasena'])) {
                // Contraseña correcta
                session_start();
                // Llenar el arreglo de la sesión
                $_SESSION['usuario'] = $users['email'];
                $_SESSION['login'] = true;
                header('Location: acta.php');
                exit; // Es importante salir del script después de redirigir
            } else {
                $mistake[] = "La contraseña es incorrecta";
            }
        } else {
            $mistake[] = "El usuario no existe";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="font-family">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo_gralco_blanco.png">
    <link rel="stylesheet" href="normalize.css">
    <title>Gralco</title>
    <a  class="portalDeEmpleados"  href="index.php"> 
            <img  type="lazy" class="logo-azul" src="LOGO-GRALCO-SIN-FONDO.png" alt=""></a>


    <?php foreach ($mistake as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
</head>

<body class="fondo-login">
 

    <div class="usuario-contraseña">
        <legend>Usuario, Contraseña y Correo</legend>
        <form  method="POST" target="_self" novalidate>
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <input type="email" name="correo" placeholder="Correo electrónico">
            <button type="submit" class="boton-infinito">Iniciar sesión</button>
        </form>
    </div>
    
    <section 
        <p class="boton-sugerencia"></p>participante de la reunion</p>
        <a class="boton-infinito" href="sugerencia.php">ingresar</a>
    </section>


    <footer class="final">
        <p>&copy; Gralco S.A. | Diseñado y Desarrollado por Sergio Fontalvo</p>
    </footer>

</body>

</html>