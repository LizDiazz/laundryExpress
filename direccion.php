<?php


if (isset($_POST['guardar'])){

$colonia= trim($_POST['col']);
$calle = trim($_POST['calle']);
$codigo = trim($_POST['postal']);
$numero = trim($_POST['num']);


$conexion = mysqli_connect("localhost","id14339605_root	","&Es=3BMeriuGWxHN","id14339605_contacto");
$consulta = "INSERT INTO direccion(col, calle, postal, num) VALUES ('$colonia','$calle', '$codigo', '$numero')";
$resultado = mysqli_query($conexion, $consulta);

if($resultado){
    ?>
    <h3 class="ok" >¡Listo estamos procesando tu dirección!</h3>
    <a href="miembro.php">ENTENDIDO</a>
    <?php
}else{
    ?>
    <h3 class="bad">¡Ups rellena todos los campos!</h3>
    <?php
    }
}

?>