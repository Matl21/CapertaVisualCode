<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
</head>
<body>

<hr>
    <form method="post">
        <section>
        <h1>Ingrese 2 numeros</h1>
        Numero 1: <input type="number" name="numero1"><br><br>
        Numero 2: <input type="number" name="numero2"><br><br>
        <input type="submit" value="Enviar" name='ejercicio4'>
        </section>
    </form>


<h1>Datos Respuesta</h1>

<?php
if(isset($_POST['ejercicio4'])){

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

echo"<br>";echo"<br>";echo"<br>";}

?>
</body>
</html>
<?php