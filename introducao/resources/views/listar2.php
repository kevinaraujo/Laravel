<html>
<head>
	<title>Listar Clientes</title>
</head>
<body>
<h1>Listar Clientes</h1>
<table>
	<tR>
		<td>ID</td>
		<td>Nome</td>
		<td>Ação</td>
	</tR>
<?php
	foreach($nomes as $id => $nome){
		echo  '<tR>
					<td>'.$id.'</td>
					<td>'.$nome.'</td>
					<td><a href="'.action('ClienteController@editar').'?id='.$id.'">[Editar]</a></td>
				</tR>';
	}
?>
</table>
</body>
</html>