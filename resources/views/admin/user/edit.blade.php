@extends('layouts.app')


@section('content')

	<form class="form" action="{{route('admin.users.update', ['user' => $user->id])}}" method="post">
		<h4 class="">Biblioteca - Editar Usuário</h4>
		
		@csrf
		@method('PUT')

		<div class="row form-group"><!-- Linha 1 -->
			<div class="col-md-4">
				<label for="first_name">Nome:</label>
				<input class="form-control" type="text" name="first_name" value="{{$user->first_name}}">
			</div>
			<div class="col-md-4">
				<label for="last_name">Sobrenome:</label>
				<input class="form-control" type="text" name="last_name" value="{{$user->last_name}}">
			</div>
			<div class="col-md-4">
				<label for="">Data Nascimento:</label>
				<input class="form-control" type="text" name="birthday" value="{{$user->birthday}}">
			</div>
		</div><!-- Fim linha 1 -->

		<div class="row form-group"><!-- Linha 2 -->
			<div class="col-md-4">
				<label for="user_name">Nome Usuário:</label>
				<input class="form-control" type="text" name="user_name" value="{{$user->user_name}}">
			</div>
			<div class="col-md-4">
				<label for="user_type">Tipo Usuário:</label>
				<input class="form-control" type="text" name="user_type" value="{{$user->user_type}}">
			</div>
			<div class="col-md-4">
				<label for="cpf">CPF:</label>
				<input class="form-control" maxlength="11" type="text" name="cpf" value="{{$user->cpf}}">
			</div>
		</div><!-- Fim Linha 2 -->
		<div class="row form-group">
			<div class="col-md-4">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" name="email" value="{{$user->email}}">
			</div>
			<div class="col-md-4">
				<label for="password">Senha:</label>
				<input class="form-control" maxlength="8" type="text" name="password" value="{{$user->password}}">
			</div>
			<div class="col-md-4 mt-4">
				<button class=" form-control btn btn-success mt-2" type="submit">Atualizar Usuário</button>
			</div>
		</div>
	</form>

@endsection