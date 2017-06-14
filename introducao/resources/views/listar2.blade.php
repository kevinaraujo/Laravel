@extends('principal')
@section('title','Listagem de Clientes')
@section('content')
<h1>Listar Clientes</h1>
<table class="table table-striped table-bordered table-hover">
	<tR>
		<td>ID</td>
		<td>Nome</td>
		<td>Ação</td>
	</tR>
	{{ $nome }}
	<?php
		foreach($nomes as $id => $nome){
			echo  '<tR>
						<td>'.$id.'</td>
						<td>'.$nome.'</td>
						<td>
							<a href="'.action('ClienteController@editar',$id).'"><span class="glyphicon glyphicon-pencil"></span></a>
							&nbsp;<a href="'.action('ClienteController@editar',$id).'"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
					</tR>';
		}
	?>
</table>
@stop