<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a726f2fb1.js" crossorigin="anonymous"></script>
    <title>Ini</title>
</head>

<body>
        <div class="login-content">
            <div class="content">
            <form method="POST" action="">
                <img src="imagenes/logovierci.png" alt="Holiwis" class="avatar">
                    <h1 class="title">BIENVENIDO</h1>
                <?PHP
                include("conexion_bd.php");
                include("controlador.php");
                ?>
                <div class="form__usuario">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input id="usuario" type="text" class="input" name="usuario" placeholder="Usuario">
                </div>
                <div class="form__clave">
                <i class="fa-solid fa-lock"></i>
                        <input type="password" id="input" class="input" name="password" placeholder="Password">
                </div>
                <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
            </form>
            </div>
        </div>
</body>
