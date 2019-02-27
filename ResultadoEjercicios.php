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
    <form method="post">

        <section>
            <h1>Ingrese notas</h1><br>
                Ingrese nombre del trabajador:<br><input type="text" name="nombre"><br><br>
                Ingrese las horas trabajas:<br><input type="number" name="horaTrabajo"><br><br>        
                <input type="submit" value="Enviar" name="ejercicio1">
        </section>
    </form>
    
    
        
    <?php
    if(isset($_POST['ejercicio1'])){

        $horaTrabajo=$_POST['horaTrabajo'];
        $nombre=$_POST['nombre'];
        $salarioMensual=0;
        $horaExtra=0;
        
        echo"<br>";echo"<br>";echo"<br>";
        
        if ($horaTrabajo<=40) {
            $salarioMensual=$horaTrabajo*16;
            echo  "El salaria mensual de ".$nombre." es ".$salarioMensual;
        }
        if ($horaTrabajo>40) {
            $horaExtra=$horaTrabajo-40;
            echo $horaExtra;
            $salarioMensual=(40*16)+($horaExtra*20);
            echo  "El salario mensual ".$nombre." es ".$salarioMensual;
        }
        echo"<br>";echo"<br>";echo"<br>";



    }
    ?>
</body>
</html>