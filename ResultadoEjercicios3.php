<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
</head>
<body>
    <h1>Ejercicios 3</h1>

    
    <?php
echo"<br>";
$letra=$_POST['letra'];
$letra = strtolower($letra)
echo"<br>";echo"<br>";echo"<br>";

if (($letra=="u")||($letra=="o")||($letra=="i")||($letra=="e")||($letra=="a")) {
    echo  "La letra  es vocal ".$letra;
}else{
    echo  "La letra  no es vocal ".$letra;
}

echo"<br>";echo"<br>";echo"<br>";

?>
</body>
</html>
<?php