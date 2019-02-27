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
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$suma=$numero1+$numero2;
$evaluacion=$suma%2;
echo"<br>";echo"<br>";echo"<br>";

if ($evaluacion==0) {
    echo  "El numero es par ".$suma;
}
else{
    echo  "El numero es impar ".$suma;
}

echo"<br>";echo"<br>";echo"<br>";

?>
</body>
</html>
<?php