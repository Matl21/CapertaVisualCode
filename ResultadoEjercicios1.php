<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
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




    ?>
</body>
</html>