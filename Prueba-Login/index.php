<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Conexión de Base de Datos</title>
</head>
<body>
    <br>
    <div class="container">
    <h2> Formulario </h2>
    <form method="post">
    <label form="usuario"> Nombre </label> 
    <input type="text" id="name" name="name" placeholder="Nombre Completo"> 
    <label form="email"> Email </label> 
    <input type="text" id="email" name="email" placeholder="Introduzca su Email"> 
    <input type="submit" name= "register">
    </form>
</div> 
<?php
include ("registrar.php");  
?>
</body> 
</html>