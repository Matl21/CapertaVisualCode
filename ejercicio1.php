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

        <!-- EJERCICIO 1 -->
        Calcular lo numero pares en  1 al 100:
         
        <br>
        <input type="submit" value="enviar" name="ejercicio1"><br><br><hr>
       
        <!-- EJERCICIO 2 -->
        Calcular lo numero de 100 al 1:
        <br>
        <input type="submit" value="enviar" name="ejercicio2"><br><br><hr>

        
        <!-- EJERCICIO 3 -->
        Calcular todo los numero que van desde el primero al segundo numero:
        <br>
        Ingrese primer numero: <input type="number" name="numero1" ><br>
        Ingrese segundo numero: <input type="number" name="numero2" ><br>
        
        <input type="submit" value="enviar" name="ejercicio3"><br><br><hr>

        <!-- EJERCICIO 4 -->
        Calcular la tabla de multiplicar de un numero ingresado:
        <br>
        Ingrese numero: <input type="number" name="nume1" ><br>
        <input type="submit" value="enviar" name="ejercicio4"><br><br><hr>

        <!-- EJERCICIO 5 -->
        Calcular la edades de 10 persona ingresadas:
        <input type="submit" value="ingresar" name="ejercicio5"><br><br><hr>
        <br>

         <!-- EJERCICIO 6 -->
        Decir la nota de 10 persona ingresadas:
        <input type="submit" value="ingresar" name="ejercicio6"><br><br><hr>
        <br>
        
        <!-- EJERCICIO 7 -->
        Calcular el factorial de un numero:<br>
        Ingrese numero: <input type="number" name="numer1" ><br>
        <input type="submit" value="ingresar" name="ejercicio7"><br><br><hr>
        <br>

        <!-- EJERCICIO 8 -->
        Calcular la suma de los digitos de un numero:<br>
        Ingrese numero: <input type="number" name="num1" ><br>
        <input type="submit" value="ingresar" name="ejercicio8"><br><br><hr>
        <br>

        <!-- EJERCICIO 9 -->
        Generar todo lo multiplos de 5 de 1 al 100:
        <input type="submit" value="ingresar" name="ejercicio9"><br><br><hr>
        <br>
    
    </form>
<br>
<?php

//EJERCICIO 1

if(isset($_POST['ejercicio1'])){
$contador=0;
for ($i=1; $i<=100 ; $i++) { 

    if ($i%2==0) {
        echo "$i <br>";
        $contador++;  
    }

}echo "hay $contador de numero pares";
}

//EJERCICIO 2
elseif (isset($_POST['ejercicio2'])) {
    
    for ($i=100; $i>=1 ; $i--) { 
        echo "$i <br>";
    }
}


//EJERCICIO 3
elseif (isset($_POST['ejercicio3'])) {
    $num1=$_POST['numero1'];
    $num2=$_POST['numero1'];
    
    for ($i=$num1; $i<=$num2 ; $i++) { 
        echo "$i <br>";
    }
}


//EJERCICIO 4
elseif (isset($_POST['ejercicio4'])) {
    $num1=$_POST['nume1'];
        
    for ($i=0; $i<=10 ; $i++) { 
        echo $i."x".$num1."=".($i*$num1)."<br>";
    }
}



//EJERCICIO 5
elseif (isset($_POST['ejercicio5'])) {
    echo "<form method='post'>";
    for ($i=1; $i <=10 ; $i++) { 
       
        echo "Ingrese la persona $i ";
        
        echo "<input type='number' name=num$i><br>";
    
    }    
    echo " INGRESADO :<input type='submit' value='Enviar' name='ejercicioSub'><br><br><hr>";
    echo "</form>";
          
}
if (isset($_POST['ejercicioSub'])){ 
    $contador1=0;
    $contador2=0;
    $contador3=0;
    $contador4=0; 
    $numer=0;     
    for ($i=1; $i<=10 ; $i++) { 
            $numer=$_POST['num'.$i];

        if (($numer>=0)&&($numer<=3)) {
            $contador1++;    
        }
        elseif (($numer>=4)&&($numer<=12)) {
            $contador2++;
        }
        elseif (($numer>=13)&&($numer<=17)) {
            $contador3++;
        }
        elseif (($numer>=18)) {
            $contador4++;
        }
       
}

    echo "<br> Bebes de 0 a 3 años hay ".$contador1;
    echo "<br> niños de 4 a 12 años hay ".$contador2;
    echo "<br> adolecente de 13 a 17 años hay ".$contador3;
    echo "<br> adultos de 18 años en adelante hay ".$contador4;

}



//EJERCICIO 6
elseif (isset($_POST['ejercicio6'])) {
    echo "<form method='post'>";
    for ($i=1; $i <=10 ; $i++) { 
       
        echo "Ingrese la  nota de la persona $i ";
        echo "<input type='number' name=num$i><br>";
        echo "Ingrese su nombre";
        echo "<input type='text' name=nom$i><br>";
        echo "Ingrese su edad";
        echo "<input type='number' name=edad$i><br>";
    
    }    
    echo " Mandar notas :<input type='submit' value='Enviar' name='ejercicioSupe'><br><br><hr>";
    echo "</form>";
          
}
if (isset($_POST['ejercicioSupe'])){ 
    $nombre=0;
    $edad=0;
    $numer=0;     
    for ($i=1; $i<=10 ; $i++) { 
            $numer=$_POST['num'.$i];
            $nombre=$_POST['nom'.$i];
            $edad=$_POST['edad'.$i];
        if ($numer>=10) {
            echo "El estudiante ".$i." saco 10 <br>";
            echo "Nombre del estudiandiante ".$nombre."<br>"; 
            echo "Edad del estudiante ".$edad."<br>";    
        }
        
       
}}


//EJERCICIO SECRET 5 o ejercicio7
if (isset($_POST['ejercicio7'])) {
    $factorial=$_POST['numer1'];
    $varb=$factorial;
    $acumulador="";
    for ($i=1; $i<$factorial; $i++) { 
        $varb=$varb*$i;
        echo $varb."<br>";
    }
    echo "<br> El factorial de ".$factorial." es ".$varb;
}


//EJERCICIO SECRET 6 o ejercicio8
if (isset($_POST['ejercicio8'])) {
    $numero=$_POST['num1'];
    $varb="".$numero;
    $numeroLetra=strlen($varb);
    $suma=0;
    for ($i=0; $i<$numeroLetra; $i++) { 
        $suma=$suma+$varb[$i];
       
    }
    echo "<br> las suma de lo digitos de numero".$numero." es ".$suma;
}


//EJERCICIO SECRET 7 o ejercicio9
if (isset($_POST['ejercicio9'])) {
    $multiplo=0;
    for ($i=1; $i<=100; $i++) { 
        if (($i%5)==0) {
            echo " <br> Mutiplo de 5 es ".$i;
        }
        
      
       
    }}







    





    ?>





</body>
</html>