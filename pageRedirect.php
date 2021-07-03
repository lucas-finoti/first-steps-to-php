<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen">	
	<title>Teste GET/POST</title>
</head>
<body>
	<form action="redir.php" method="GET">
		<fieldset>
			<h1>Utilizando método GET</h1>
			<label for="nome"><strong>Nome: </strong></label>
			<input type="text" name="nome" id="nome" required=""><br><br>
			<label for="idade"><strong>Idade: </strong></label>
			<input type="number" name="idade" id="idade" required=""><br><br>
			<button class="botao" type="submit">Enviar</button>
		</fieldset>
	</form>
	<form action="redir.php" method="POST">
		<fieldset>
			<h1>Utilizando método POST</h1>
			<label for="nome"><strong>Nome: </strong></label>
			<input type="text" name="nome" id="nome" required=""><br><br>
			<label for="idade"><strong>Idade: </strong></label>
			<input type="number" name="idade" id="idade" required=""><br><br>
			<button class="botao" type="submit">Enviar</button>
		</fieldset>
	</form>	
</body>
</html>


