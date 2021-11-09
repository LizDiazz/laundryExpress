<?php


if (isset($_POST['enviar'])){

$nombre = trim($_POST['nomb']);
$email = trim($_POST['email']);
$telefono = trim($_POST['telef']);
$mensaje = trim($_POST['mensaj']);


$conexion = mysqli_connect("localhost","id14339605_root	","&Es=3BMeriuGWxHN","id14339605_contacto");
$consulta = "INSERT INTO resgitro(nomb, email, telef, mensaj) VALUES ('$nombre','$email', '$telefono', '$mensaje')" ;
$resultado = mysqli_query($conexion, $consulta);

if($resultado){
    ?>
    <h3 class="ok">¡Se han enviado tus datos correctamente!</h3>
    <?php
}else{
    ?>
    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
    <?php
    }
}

?>