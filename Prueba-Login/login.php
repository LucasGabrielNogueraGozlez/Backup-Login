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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
        <div class="login-content">
            <div class="content">
            <form method="POST" action="">
                <img src="imagenes/logovierci.png" alt="Holiwis" class="avatar">
                    <h1 class="title">Bienvenido</h1>
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
                <input name="btningresar" class="btn" type="submit" value="Iniciar Sesion">
            </form>
            </div>
        </div>
</body>

