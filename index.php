<?php
include './FormPersonal.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
    $documento = $_POST['documento'];
    $tipo_de_documento = $_POST['tipo_de_documento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $email = $_POST['email'];

    $userBasics = new FormPersonal($nombres, $apellidos, $fecha_de_nacimiento, $documento, $tipo_de_documento, $telefono, $direccion, $ciudad, $email);
    $formattedData = $userBasics->getDataFormatted();

    echo "Datos ingresados:<br>";
    echo $formattedData;
} else {
    echo <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
        <title>Formulario de Datos Personales</title>
    </head>
    <body>
        <form method="post">
            Nombres: <input type="text" name="nombres"><br>
            Apellidos: <input type="text" name="apellidos"><br>
            Fecha de Nacimiento: <input type="text" name="fecha_de_nacimiento"><br>
            Documento: <input type="text" name="documento"><br>
            Tipo de Documento: <input type="text" name="tipo_de_documento"><br>
            Teléfono: <input type="text" name="telefono"><br>
            Dirección: <input type="text" name="direccion"><br>
            Ciudad: <input type="text" name="ciudad"><br>
            Correo Electrónico: <input type="text" name="email"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
HTML;
}
?>