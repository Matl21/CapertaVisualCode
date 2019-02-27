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
        $horaTrabajo=$_POST['horaTrabajo'];
        $nombre=$_POST['nombre'];
        $salarioMensual=0;
        $horaExtra=0;
        
        echo"<br>";echo"<br>";echo"<br>";
        
        if ($horaTrabajo<=40) {
            $salarioMensual=$horaTrabajo*16;
            echo  "El salario mensual ganado es ".$salarioMensual;
        }
        if ($horaTrabajo>40) {
            $horaExtra=$horaTrabajo-40;
            echo $horaExtra;
            $salarioMensual=(40*16)+($horaExtra*20);
            echo  "El salario mensual ganado es ".$salarioMensual;
        }
        echo"<br>";echo"<br>";echo"<br>";




    ?>
</body>
</html>