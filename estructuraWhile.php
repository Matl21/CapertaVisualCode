<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form method="post">

    <br>
    Ingrese numero: <input type="number" name="num1" ><br>
    <input type="submit" value="enviar" name="ejercicio1"><br><br><hr>

    Numero impares que hay en 1 al 100:
    <input type="submit" value="Mostrar" name="ejercicio2"><br><br><hr>
    <br>

    <!-- EJERCICIO 3 -->
    Generar todo lo multiplos de 3 de 1 al 50:
    <input type="submit" value="ingresar" name="ejercicio3"><br><br><hr>
    <br>

    <!-- EJERCICIO 4 -->
    Generar todo los numero de 1 al 5 con su respectivo decimales:
    <input type="submit" value="ingresar" name="ejercicio4"><br><br><hr>
    <br>

</form>






<?php
if (isset($_POST['ejercicio1'])) {
        $num1=$_POST['num1'];
        $a=1;
        $b=1;

        while ($a <= $num1) {
            
            while ($b <= 10) {
                echo $b."x".$a."=".($b*$a)."<br>";
                $b++;
            }
            $b=0;
            echo "<br><br><br>";
            $a++;
        }
}




if (isset($_POST['ejercicio2'])) {
        $a=1;
    while ($a <= 100) {
        if (($a%2)!=0) {
            echo "impar ".$a."<br>";
              
        }
        $a++;
    }
}



if (isset($_POST['ejercicio3'])) {
    $a=1;
    while($a<=50) { 

        if ((($a%3)==0)&&($a>=3)) {
            echo "Es un multiplo".$a."<br>";
              
        }
        $a++;
    }
}

if (isset($_POST['ejercicio4'])) {
    $a=1; $b=0;
    while($a<=5) { 

        while ($b<=5 ){
            
            echo "Numero ".$a.".".$b."<br>";
            $b++;  
        }
        echo "<br><br><br>";
        $b=0;
        $a++;
    }
}




?>
</body>
</html>