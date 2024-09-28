<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['audio']) && $_FILES['audio']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '/path/to/upload/directory/';
        $uploadFile = $uploadDir . basename($_FILES['audio']['name']);

        if (move_uploaded_file($_FILES['audio']['tmp_name'], $uploadFile)) {
            echo 'Audio guardado con éxito.';
        } else {
            http_response_code(500);
            echo 'Error al mover el archivo subido.';
        }
    } else {
        http_response_code(400);
        echo 'No se recibió ningún archivo de audio o hubo un error en la subida.';
    }
} else {
    http_response_code(405);
    echo 'Método no permitido.';
}