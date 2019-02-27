<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    
    
<hr>
    <form action="ResultadoEjercicios1.php" method="post">
        <section>
            <h1>Ingrese notas</h1>
                <br>
                Ingrese cantidad de camisa a comprar:<br><input type="number" name="cantidadCamisa"><br><br>
                Ingrese precios de la camisas:<br><input type="number" name="preciosCamisa"><br><br>        
                <input type="submit" value="Enviar" name="ejercicio1">
        </section>
    </form>
    
    
    
    
    
    <?php
        if(isset($_POST['ejercicio1'])){
        $cantidadCamisa=$_POST['cantidadCamisa'];
        $preciosCamisa=$_POST['preciosCamisa'];
        $descuento=0;
        
        echo"<br>";echo"<br>";echo"<br>";
        
        if ($cantidadCamisa>=3) {
            $descuento=($cantidadCamisa*$preciosCamisa)*0.20;
            $preciosCamisa=($cantidadCamisa*$preciosCamisa)-$descuento;
            echo  "El precios de la camisas es ".$preciosCamisa." y el descuento aplicado es 20%";
        }
        if ($cantidadCamisa<3) {
            $descuento=($cantidadCamisa*$preciosCamisa)*0.10;
            $preciosCamisa=($cantidadCamisa*$preciosCamisa)-$descuento;
            echo  "El precios de la camisas es ".$preciosCamisa." y el descuento aplicado es 10%";
        }
        echo"<br>";echo"<br>";echo"<br>";



    }
    ?>
</body>
</html>