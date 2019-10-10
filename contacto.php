<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Contactanos</title>
</head>
<body>
    <?php
        include_once 'complementos/menu.php';
    ?>
    <form action="" method="POST" autocomplete="off">
        <div class="container">
            <div class="container-contacto">
                <div class="titulo">
                    <h1>Contactanos</h1>
                    <hr>
                </div>
                <div class="nombre">
                    <h2>Ingrese su Nombre</h2>
                    <input type="text" name="txtNombre" id="txtNombre">
                </div>
                <div class="apellido">
                    <h2>Ingrese su Apellido</h2>
                    <input type="text" name="txtApellido" id="txtApellido">
                </div>
                <div class="telefono">
                    <h2>Ingrese su Telefono</h2>
                    <input type="text" name="txtTelefono" id="txtTelefono">
                </div>
                <div class="correo">
                    <h2>Ingrese su Correo</h2>
                    <input type="text" name="txtCorreo" id="txtCorreo">
                </div>
                <div class="mensaje">
                    <h2>Mensaje</h2>
                    <textarea name="txtMensaje" id="txtMensaje" cols="40" rows="5"></textarea>
                </div>
                <div class="boton-enviar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </div>
    </form>


</body>
</html>