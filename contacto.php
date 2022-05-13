<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "contacto";

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

// Varios destinatarios
$para  = 'henmarmedina@gmail.com' . ', '; // atención a la coma


// título
$título = 'Recibiste un nuevo mensaje';

// mensaje
$mensaje = "
Nombre: $nombre <br>
Correo: $correo <br>
Telefono: $telefono <br>
Mensaje: $mensaje
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: henmarmedina@gmail.com>' . "\r\n";
$cabeceras .= 'From: contacto@henmarmedina.com.ar>' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);

    //if ($nombre && $correo && $telefono && $mensaje != "") {
header("Location: confirmacion-envio.php");
    }    
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
<?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <P>Te invito a contactarme por el medio que mas te convenga</P>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow" require>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow" require>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Télefono y/o Whatssap"
                            class="form-control shadow" require>
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribir aqui tu mensaje"
                            class="form-control shadow" require></textarea>
                    </div>
                    <div class="me-auto text-right">
                        <button id="btnEnviar" name="btnEnviar" class="btn btn blanco px-4">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
    <div class="whatsapp pt-3 pb-3 px-3">
        <a href="https://api.whatsapp.com/send?phone=541164746618" target="_blank">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>