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
    
    <!-- hacer un menu para los ejercicios -->
    <ul>
        <a href="Ejercicios.php">INICIO</a><br>

        <a href="Ejercicios.php?pag=ResultadoEjercicios.php">Primer_Ejercicio</a><br>
        <a href="Ejercicios.php?pag=ResultadoEjercicios1.php">Segundo_Ejercicio</a><br>
        <a href="Ejercicios.php?pag=ResultadoEjercicios2.php">Tercer_Ejercicio</a><br>
        <a href="Ejercicios.php?pag=ResultadoEjercicios3.php">Cuarto_Ejercicio</a><br>
        <a href="Ejercicios.php?pag=ResultadoEjercicios4.php">Quinto_Ejercicio</a><br>
        <a href="Ejercicios.php?pag=datos1.php">DATOS1</a><br>
        <a href="Ejercicios.php?pag=datosSwitch.php">DATOS STWICH</a><br>
    </ul>
    <?php
    if(isset($_GET['pag'])){
        include($_GET['pag']);
    }
    ?>

</body>
</html>