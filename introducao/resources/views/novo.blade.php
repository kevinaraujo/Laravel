@extends('principal')
@section('content')
</h1>Novo Cliente<h1>
<form>
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
	</div>
	
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
	</div>
	
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" class="form-control" placeholder="Telefone" aria-describedby="basic-addon1">
	</div>
	
	<input type="submit" value="cadastrar"></br>
	
	<a href="<?php echo action('ClienteController@listar'); ?>">Listar Clientes</a>
</form>
@stop