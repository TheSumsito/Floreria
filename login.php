<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'complementos/menu.php';
    ?>
    <form action="" method="POST" autocomplete="off">
        <div class="container">
            <div class="container-login">
                <div class="titulo">
                    <h1>Iniciar Sesion</h1>
                    <hr>
                </div>

                <div class="username">
                    <h2>Ingrese Usuario</h2>
                    <input type="text" name="txtUser" id="txtUser">
                </div>

                <div class="password">
                    <h2>Ingrese Contraseña</h2>
                    <input type="password" name="txtPass" id="txtPass">
                </div>

                <div class="boton-ingresar">
                    <input type="submit" value="Ingresar">
                </div>

            </div>
        </div>
    </form>
</body>
</html>