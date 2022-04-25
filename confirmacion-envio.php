<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "contacto";

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
    <link rel="shortcut icon" href="images/favicon.ico" />
    
</head>

<body id="contacto">
<?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-sm-5">
                <h1>Gracias por contactarte,</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12 mt-4">
                <P>Te estare respondiendo a la brevedad posible.</P>
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