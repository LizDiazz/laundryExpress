<?php


if (isset($_POST['registrarse'])){
    if(strlen($_POST['usuario'])>=1 && strlen($_POST['contrasena']) >=1){

        
        $user= trim($_POST['usuario']);
        $pass = trim($_POST['contrasena']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['tel']);


        $conexion = mysqli_connect("localhost","id14339605_root	","&Es=3BMeriuGWxHN","id14339605_contacto");
        $consulta= "INSERT INTO crearre(usuario, contrasena, correo, tel) VALUES ('$user','$pass', '$correo', '$telefono')";
        $resultado= mysqli_query($conexion, $consulta);
        if($resultado){
            ?>
            <h3 class="ok">¡Se ha registrado correctamente!</h3>
            <a href="index.html">ok</a>
            <?php
            }else{
                ?>
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
                }
            }else{
                ?>
                <h3 class="bad">Por favor, llene los campos correctamente</h3>
                <?php
            }
}
?>