<?php
$pg = "inicio";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
<?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                    <a href="proyectos.php">
                    <img src="images/cohete.svg" class="cohete">
                </a>
            </div>        
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn btn-blanco">Conoce mis proyectos</a>
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