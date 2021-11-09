<?php


if (isset($_POST['isesion'])){
    if(strlen($_POST['usuario'])>=1 && strlen($_POST['contrasena'])>=1){

$user= trim($_POST['usuario']);
$pass = trim($_POST['contrasena']);
$conexion= mysqli_connect("localhost","id14339605_root	","&Es=3BMeriuGWxHN","id14339605_contacto");
$consulta= "SELECT contrasena FROM crearre where usuario='$user'";
$resultado= mysqli_query($conexion, $consulta);
$fila=$resultado->fetch_assoc();
if($fila['contrasena'] == $pass) {
    ?>
    <h3 class="ok">¡Iniciaste sesión correctamente!</h3>
    <a href="mapas.php">ok</a>
    <?php
}else{
    ?>
    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
    <?php
    }?>
    <?php

    }else{
        ?>
        <h3 class="bad">Por favor, llene los campos correctamente</h3>
        <?php
        }
}

?>