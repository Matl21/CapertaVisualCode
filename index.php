<html>
<head>
<link rel="stylesheet" type="text/css">
<link rel="stylesheet" href="estilo.css">
</head>

<body>
	<h1>Programando con PHP</h1>
<nav><ul>
<a href="index.php">inicio</a>
<a  href="index.php?x=estructuraFor.php">Ejemplo de For</a>
<a  href="index.php?x=ejercicio1.php">Ejercicio 1</a>
<a  href="index.php?x=estructuraWhile.php">Ejercicio While</a>



</ul></nav>
<?php
if(isset($_GET['x'])){
    include($_GET['x']);
}


?>
</html>