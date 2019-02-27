<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form  method="post">

<section>

<h1>Ingrese 2 numeros</h1>
Numero 1: <input type="number" name="numero1">
Numero 2: <input type="number" name="numero2"><br><br>
Operacion: <br>
Suma:<input type="radio" name="operacion" value="1">
resta:<input type="radio" name="operacion" value="2">
Multiplicacion:<input type="radio" name="operacion" value="3">
Division:<input type="radio" name="operacion" value="4"><br><br>

<input type="submit" value="Enviar" name="datos">
</section>

</form>
       
    <?php
    //forma de que los resultado se vean en la misma pagina. gracias al name datos del submi
    if(isset($_POST['datos'])){
    
        echo"<br>";
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    $suma=0;
    $resta=0;
    $multiplicacion=0;
    $division=0;
    //haciendo uso del radio button
    $operacion=$_REQUEST['operacion'];
    
   

switch ($operacion) {
    case 1:
    $suma=$numero1+$numero2;   
    echo "la suma de los numeros es ".$suma;
        break;
    case 2:
    $resta=$numero1-$numero2;
        echo "la resta de los numero es ".$resta;
        break;
    case 3:
    $multiplicacion=$numero1*$numero2;
        echo "la multiplicacion de los numeros es ".$multiplicacion;
        break;
    case 4:
    $division=$numero1/$numero2;
        echo "la division de los numeros es ".$division;
        break;
    default:
        echo "Ni maquinaaaa carnal";
        break;
}

    }
    ?>
</body>
</html>