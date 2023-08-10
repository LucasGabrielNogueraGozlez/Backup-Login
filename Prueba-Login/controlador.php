
<?php
require "./conexion_bd.php";
if(!empty($_POST["btningresar"])) {
    if(empty($_POST["usuario"]) or empty($_POST["password"])) {
        echo '<div class="compl_campos">COMPLETE LOS CAMPOS</div>';
    } else {
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $sql = $conex->query("select * from usuarios where usuario='$usuario' and clave='$clave' ");
        if ($datos = $sql->fetch_object()) {
            header("location:index.php"); 
            exit(); 
        } else {
            echo '<div class="acce_deneg">ACCESO DENEGADO</div>';
        }
    }
}

?>
