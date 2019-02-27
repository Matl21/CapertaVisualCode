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
echo"<br>";

$datos1=$_POST['datos1'];
$datos2=$_POST['datos2'];
$datos3=$_POST['datos3'];


echo"<br>";echo"<br>";echo"<br>";

if (($datos1>$datos2)&&($datos1>$datos3)) {
    echo  "La datos 1 mayor es ".$datos1;
}
if (($datos2>$datos1)&&($datos2>$datos3)) {
    echo  "La datos 2 mayor es ".$datos2;
}
if (($datos3>$datos2)&&($datos3>$datos1)) {
    echo  "La datos 3 mayor es ".$datos3;
}
echo"<br>";echo"<br>";echo"<br>";


echo"<br>";
?>
</body>
</html>
<?php