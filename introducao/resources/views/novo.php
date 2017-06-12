<html>
<head>
	<title>Novo Cliente</title>
</head>
<body>
</h1>Novo Cliente<h1>
<form>
	Nome:<input type="text"></br>
	E-mail:<input type="text"></br>
	Telefone:<input type="text"></br>
	<input type="submit" value="cadastrar"></br>
	<a href="<?php echo action('ClienteController@listar'); ?>">Listar Clientes</a>
</form>
</body>
</html>