<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>Biblioteca - Usuários</title>
	<!-- Bootstrap Online version -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="contianer">
		<h3>Usuários</h3>
		<table class="table">
			<th>ID</th>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Cpf</th>
			<th>Usuário</th>
			<th>Data Nascimento</th>
			<th>Tipo usuário</th>
			<th>Email</th>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->first_name}}</td>
						<td>{{$user->last_name}}</td>
						<td>{{$user->cpf}}</td>
						<td>{{$user->user_name}}</td>
						<td>{{$user->birthday}}</td>
						<td>{{$user->user_type}}</td>
						<td>{{$user->email}}</td>
						<td>Editar</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{$users->links()}}
	</div>
</body>
</html>