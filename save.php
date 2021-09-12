<?php
    if(isset($_POST['register'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1){
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $fechareg = date("d/m/y");
            $basededatos = "formulario";
            $conex = mysqli_connect("localhost","root","");
            $bd = mysqli_select_db($conex,$basededatos);
            $consultar = "INSERT INTO usuarios(nombre, email, fecharegistro) VALUES ('$nombre','$email','$fechareg')";
            $resultado = mysqli_query($conex,$consultar);
            if($resultado){
                ?>
                <h3 class="ok">Te has registrado correctamente</h3>
                <?php
            } else{
                ?>
                <h3 class="bad">Ha ocurrido un error</h3>
                <?php
            }
        } else {
            ?>
            <h3 class="bad">Por favor complete los campos</h3>
            <?php
        }
    }
    
?>