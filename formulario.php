<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./estilos/estilos.css">
    <title>Formulario PHP</title>
</head>
<body>
    
    <form action="datos.php" method="post">
        Nombre:<input type="text" name="nombre">
        Apellido:<input type="text" name="apellido">
        <br><br><br>

        <section>
        <h1>Ingrese notas</h1>
        Nota 1: <input type="number" name="nota1">
        Nota 2:<input type="number" name="nota2">
        Nota 3:<input type="number" name="nota3">

        <input type="submit" value="Enviar">
        </section>
    </form>
    <br><br><br>

    



    </body>
</html>