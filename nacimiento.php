<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'complementos/menu.php';
    ?>

    <div class="container-titulo">
        <div class="titulo">
            <h1>Nacimientos</h1>
            <hr>
        </div>
    </div>


    <div class="container-gallery">
        <div class="foto-1">
            <a href="#img-01"><img src="img/nacimientos/01.jpg" alt=""></a>
            <div class="descripcion">
                <h3>Arreglo Floral exotico con Rosas, Globo y Peluche</h3>
                <br><br>
                <p>$ 100.000</p>
                <div class="boton-agregar">
                    <input type="submit" value="Agregar">
                </div>
            </div>
            <div class="acercar" id="img-01">
                <div class="imagen">
                    <a href=""><img src="img/nacimientos/01.jpg" alt=""></a>
                </div>
                <div class="cerrar">
                    <a href="">x</a>
                </div>
            </div>
        </div>
        <div class="foto-2">
            <a href="#img-02"><img src="img/nacimientos/02.jpg" alt=""></a>
            <div class="descripcion">
                <h3>Arreglo floral Jardinera Gigante con Globos y Peluche</h3>
                <br>
                <p>$ 250.000</p>
                <div class="boton-agregar">
                    <input type="submit" value="Agregar">
                </div>
            </div>
            <div class="acercar" id="img-02">
                <div class="imagen">
                    <a href=""><img src="img/nacimientos/02.jpg" alt=""></a>
                </div>
                <div class="cerrar">
                    <a href="">x</a>
                </div>
            </div>
        </div>
        <div class="foto-3">
            <a href="#img-03"><img src="img/nacimientos/03.jpg" alt=""></a>
            <div class="descripcion">
                <h3>Ramo de Flores para Nacimiento Filadelfia</h3>
                <br><br>
                <p>$ 45.000</p>
                <div class="boton-agregar">
                    <input type="submit" value="Agregar">
                </div>
            </div>
            <div class="acercar" id="img-03">
                <div class="imagen">
                    <a href=""><img src="img/nacimientos/03.jpg" alt=""></a>
                </div>
                <div class="cerrar">
                    <a href="">x</a>
                </div>
            </div>
        </div>
        <div class="foto-4">
            <a href="#img-04"><img src="img/nacimientos/04.jpg" alt=""></a>
            <div class="descripcion">
                <h3>Arreglo floral Exótico especial</h3>
                <br><br>
                <p>$ 120.000</p>
                <div class="boton-agregar">
                    <input type="submit" value="Agregar">
                </div>
            </div>
            <div class="acercar" id="img-04">
                <div class="imagen">
                    <a href=""><img src="img/nacimientos/04.jpg" alt=""></a>
                </div>
                <div class="cerrar">
                    <a href="">x</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>