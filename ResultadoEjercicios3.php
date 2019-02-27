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

    <hr>
    <form method="post">

    <section>
        
        <h1>Ingrese Letra</h1>
        Letra: <input type="text" name="letra"><br><br>
        <input type="submit" value="Enviar" name="ejercicio3">
        
    </section>
    </form>
    <hr>




<?php
if(isset($_POST['ejercicio3'])){

echo"<br>";
$letra=$_POST['letra'];
$letra = strtolower($letra);
echo"<br>";echo"<br>";echo"<br>";

if (($letra=="u")||($letra=="o")||($letra=="i")||($letra=="e")||($letra=="a")) {
    echo  "La letra  es vocal ".$letra;
}else{
    echo  "La letra  no es vocal ".$letra;
}

echo"<br>";echo"<br>";echo"<br>";
}
?>
</body>
</html>
