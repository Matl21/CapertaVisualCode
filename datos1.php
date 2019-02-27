<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <H1>Programacion en PHP</H1>  
    <form  method="post">

        <section>
        <h1>Ingrese 2 numeros</h1>
        Numero 1: <input type="number" name="numero1">
        Numero 2: <input type="number" name="numero2">
        <input type="submit" value="Enviar" name="datos">
        </section>
       
        
    </form>
    
    <?php
    //Modo de hacer todo en una sola pagina
    //seteo es lo isset aqui funciona si da en el boton de nombre enviar
    if(isset($_POST['datos'])){
        
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $suma= $n1 + $n2;
        echo "Suma de dos numero".$suma;
    }
    
    ?>



</body>
</html>