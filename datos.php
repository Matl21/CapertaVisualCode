<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
</head>
<body>
    <h1>Datos traido de la pagina anterior</h1>

    <?php
echo "<link rel=stylesheet href=./estilos/estilos.css>";

echo "hola su nombre es ". $_POST['nombre'] ." su apellido es " . $_POST['apellido'];
echo"<br>";
$dato=$_POST['nombre'];
echo $dato;
echo"<br>";

$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];

$promedio=$nota1+$nota2+$nota3;
$promedio=$promedio/3;
echo "El promedio de la 3 notas es ".$promedio;
echo"<br>";echo"<br>";echo"<br>";

if (($nota1>$nota2)&&($nota1>$nota3)) {
    echo  "La nota 1 mayor es ".$nota1;
}
if (($nota2>$nota1)&&($nota2>$nota3)) {
    echo  "La nota 2 mayor es ".$nota2;
}
if (($nota3>$nota2)&&($nota3>$nota1)) {
    echo  "La nota 3 mayor es ".$nota3;
}
echo"<br>";echo"<br>";echo"<br>";


//Locura de PHP
$varA=8;
$varB="8";
if ($varA==$varB) {
    echo   "varA es igual a varB";
}else{
    echo   "varA no es igual a varB";
}



echo"<br>";
?>
</body>
</html>
<?php
