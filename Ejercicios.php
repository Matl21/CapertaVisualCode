<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios PHP</title>
    <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body>
    <h1>EJERCICIOS</h1>
    <br>
    <hr>
    <form action="ResultadoEjercicios.php" method="post">

        <section>
            <h1>Ingrese notas</h1>
                Ingrese nombre del trabajador:<input type="text" name="apellido"><br><br>
                Ingrese las horas trabajas: <input type="number" name="horaTrabajo"><br><br>        
                <input type="submit" value="Enviar">
        </section>
    </form>
    <hr>
    <form action="ResultadoEjercicios1.php" method="post">

        <section>
            <h1>Ingrese notas</h1>
                Ingrese cantidad de camisa a comprar:<input type="number" name="cantidadCamisa"><br><br>
                Ingrese precios de la camisas:<input type="number" name="preciosCamisa"><br><br>        
                <input type="submit" value="Enviar">
        </section>
    </form>
    <hr>
    <form action="ResultadoEjercicios2.php" method="post">

        <section>
        
        <h1>Ingrese DATOS</h1>
        Dato 1: <input type="number" name="datos1">
        Dato 2:<input type="number" name="datos2">
        Dato 3:<input type="number" name="datos3">

        <input type="submit" value="Enviar">
        </section>
        </section>
    </form>
    <hr>
    <form action="ResultadoEjercicios3.php" method="post">

        <section>
        
        <h1>Ingrese Letra</h1>
        Letra: <input type="text" name="letra">
        <input type="submit" value="Enviar">
        </section>
        </section>
    </form>
    <hr>
    <form action="ResultadoEjercicios3.php" method="post">

        <section>
        
        <h1>Ingrese Letra</h1>
        Letra: <input type="text" name="letra">
        <input type="submit" value="Enviar">
        </section>
        </section>
    </form>
    <hr>
    <form action="ResultadoEjercicios4.php" method="post">

        <section>
        
        <h1>Ingrese 2 numeros</h1>
        Numero 1: <input type="number" name="numero1">
        Numero 2: <input type="number" name="numero2">
        <input type="submit" value="Enviar">
        </section>
        </section>
    </form>

    <hr>
    
    <!-- hacer un menu para los ejercicios -->
    <ul>
        <a href="Ejercicios.php">INICIO</a>
        <a href="Ejercicios.php?pag=datos1.php">DATOS1</a>
        <a href="Ejercicios.php?pag=datosSwitch.php">DATOS STWICH</a>
    </ul>
    <?php
    if(isset($_GET['pag'])){
        include($_GET['pag']);
    }
    ?>

</body>
</html>