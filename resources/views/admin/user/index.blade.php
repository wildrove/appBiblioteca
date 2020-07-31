<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>Biblioteca - Usuários</title>
</head>
<body>
	<div class="contianer">
		<table>
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