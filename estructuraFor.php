<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
  
</head>
<body>
    <?php
    $inicio=2;
    $fin=20;
    echo "<table>";
    echo "<tr><th>numero</th></tr> ";
    
    for ($i=$inicio; $i<=$fin ; $i++) {
        echo "<tr><td>$i</td></tr>";

    }
    echo "</table>";
    
    
    
    ?>




</body>
</html>