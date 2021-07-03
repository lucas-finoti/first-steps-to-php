<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen">	
	<title>Calculadora 2.0</title>
</head>
<body>
	<h1>Utilizando método GET</h1>
	<form method="GET">
		<label for="num1"><strong>Primeiro Número: </strong></label>
		<input type="number" name="num1" id="num1" required=""><br><br>
		<label for="num2"><strong>Segundo Número: </strong></label>
		<input type="number" name="num2" id="num2" required=""><br><br>	
		<button class="calculo" type="submit">Calcular</button>
	</form>
	<h1>Utilizando método POST</h1>
	<form method="POST">
		<label for="num1"><strong>Primeiro Número: </strong></label>
		<input type="number" name="num1" id="num1" required=""><br><br>
		<label for="num2"><strong>Segundo Número: </strong></label>
		<input type="number" name="num2" id="num2" required=""><br><br>	
		<button class="calculo" type="submit">Calcular</button>
	</form>	
</body>
</html>
<?php
	if ($_GET) {
		echo "<br>Número 1: ", $_GET['num1'], "<br><br>";
		echo "Número 2: ", $_GET['num2'], "<br><br>";		
		echo "Resultado da Adição: ", $_GET['num1'] + $_GET['num2'], "<br>";
		echo "Resultado da Subrtração: ", $_GET['num1'] - $_GET['num2'], "<br>";
		echo "Resultado da Multiplicação: ", $_GET['num1'] * $_GET['num2'], "<br>";
 	}
 	elseif ($_POST) {
 		echo "<br>Número 1: ", $_POST['num1'], "<br><br>";
		echo "Número 2: ", $_POST['num2'], "<br><br>";		
		echo "Resultado da Adição: ", $_POST['num1'] + $_POST['num2'], "<br>";
		echo "Resultado da Subrtração: ", $_POST['num1'] - $_POST['num2'], "<br>";
		echo "Resultado da Multiplicação: ", $_POST['num1'] * $_POST['num2'], "<br>";	
 	}
?>