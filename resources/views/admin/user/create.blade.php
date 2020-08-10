@extends('layouts.app')


@section('content')

	<form class="form" method="post" action="{{route('admin.users.user')}}">
		<h4 class="">Biblioteca - Cadastro de Usuário</h4>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row form-group"><!-- Linha 1 -->
			<div class="col-md-4">
				<label for="first_name">Nome:</label>
				<input class="form-control" type="text" name="first_name" required="">
			</div>
			<div class="col-md-4">
				<label for="last_name">Sobrenome:</label>
				<input class="form-control" type="text" name="last_name" required="">
			</div>
			<div class="col-md-4">
				<label for="">Data Nascimento:</label>
				<input class="form-control" type="date" name="birthday" required="">
			</div>
		</div><!-- Fim linha 1 -->

		<div class="row form-group"><!-- Linha 2 -->
			<div class="col-md-4">
				<label for="user_name">Nome Usuário:</label>
				<input class="form-control" type="text" name="user_name" required="">
			</div>
			<div class="col-md-4">
				<label for="user_type">Tipo Usuário:</label>
				<select class="form-control " name="user_type">
					<option value="Aluno" selected="">ALUNO</option>
					<option value="Administrador">ADMINISTRADOR</option>
					<option value="Professor">PROFESSOR</option>
				</select>
			</div>
			<div class="col-md-4">
				<label for="cpf">CPF:</label>
				<input class="form-control" maxlength="11" type="text" name="cpf" required="">
			</div>
		</div><!-- Fim Linha 2 -->
		<div class="row form-group">
			<div class="col-md-4">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" name="email" required="">
			</div>
			<div class="col-md-4">
				<label for="password">Senha:</label>
				<input class="form-control" maxlength="8" type="password" name="password" required="">
			</div>
			<div class="col-md-4 mt-4">
				<button class=" form-control btn btn-success mt-2" type="submit">Criar Usuário</button>
			</div>
		</div>
	</form>

@endsection