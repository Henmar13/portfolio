<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];
    if ($usuario != "") {
        header("Location: confirmacion-envio.php");
    }
}

//mail($nombre, $correo, $telefono, $mensaje);
//header("Location: confirmacion-envio.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if (isset($mensaje)) { ?>
              
                    <h1> <?php echo $mensaje; ?></h1>
                    <p><?php echo $mensaje1; ?></p>
                                  
                <?php } ?>
                <form action="" method="post">
                    <div>
                        <label for="txtUsuario">Usuario</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>
                    <div>
                        <label for="txtClave" class="py-3">Clave</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div class="py-3">
                        <button class="btn btn-primary" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>



    </main>

</body>

</html>