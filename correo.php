<?php

// Habilitar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Importar las clases de PHPMailer al espacio de nombres global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Cargar el autoloader de Composer
require 'vendor/autoload.php';

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurar el servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'serme1009@gmail.com';
    $mail->Password = 'venl dxig pogl kzuv';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Configurar el remitente y el destinatario
    $mail->setFrom('serme1009@gmail.com', 'reunion');
    $mail->addAddress('sergio_luis-123@hotmail.com', 'Nombre del Destinatario');
    $mail->addAddress('serme1009@gmail.com', 'sergio');
    $mail->addAddress('villegascarlos225@gmail.com', 'carlos');
    $mail->addAddress('jmejia68@cuc.edu.co', 'jainer');
    

    

    // Configurar el contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'reunion del dia 29/05/2024';
    $mail -> CharSet ='UTF-8';
    // Leer los datos del formulario
    $acta = $_POST['acta']; 
    $contacto = $_POST['contacto'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $objetivos = $_POST['objetivos'];

    // Construir el cuerpo del correo con los datos del formulario
    $mailContent = "
        <h1>Datos de la Reunión</h1>
        <p><b>Mensaje de Acta:</b> $acta</p>
        <p><b>Redactó el acta:</b> $contacto</p>
        <p><b>Fecha de finalización:</b> $fecha</p>
        <p><b>Hora de finalización:</b> $hora</p>
        <p><b>objetivos:</b> $objetivos</p>
      
    ";

    $mail->Body = $mailContent;

    // Enviar el correo
    $mail->send();
    echo 'El correo se envió correctamente.';
} catch (Exception $e) {
    echo "El correo no pudo ser enviado. Error: {$mail->ErrorInfo}";
}