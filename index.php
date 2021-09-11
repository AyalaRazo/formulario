<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Formulario</title>
</head>
<body>
    <form method="post">
        <h1>Registrate Aquí</h1>
        <input class="nombre" type="text" name="nombre" placeholder="Nombre Completo">
        <input class="email" type="email" name="email" placeholder="Email">
        <input class="enviar" type="submit" name="register">
        <h3></h3>
    </form>
    <?php
        include("register.php");
    ?>
</body>
</html>