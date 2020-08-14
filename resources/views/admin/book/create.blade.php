@extends('layouts.app')


@section('content')

	<h4 class="h4">Biblioteca - Cadastro de Livros</h4>
	<form class="form" action="{{route('admin.books.store')}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class=" form-row"><!-- Iicio Linha 1 -->
			<div class="col-md-6 form-group">
				<label for="book_name">Nome Livro:</label>
				<input class="form-control" type="text" name="book_name">
			</div>
			<div class="col-md-6 form-group">
				<label for="author_name">Nome Autor:</label>
				<input class="form-control" type="text" name="author_name">
			</div>
		</div><!-- Fim linha 1 -->
		<div class="form-row"><!-- Inicio Linha 2 -->
			<div class="col-md-6 form-group">
				<label for="description">Descrição Livro:</label>
				<textarea class="form-control" name="description" maxlength="2000"></textarea>
			</div>
			<div class="col-md-6 form-group">
				<label for="book_image">Imagem Livro:</label>
				<input class="form-control-file" type="file" name="book_image" id="book_file" accept=".jpg, .png">
			</div>
		</div><!-- Fim linha 2 -->
		<div class="form-row"><!-- Inicio linha 3 -->
			<div class="col-md-6 form-group">
				<label for="publishing_name">Nome Editora:</label>
				<input class="form-control" type="text" name="publishing_name">
			</div>
			<div class="col-md-6 form-group">
				<label for="release_date">Ano Lançamento:</label>
				<input class="form-control" type="text" name="release_date">
			</div>
		</div><!-- Fim linha 3 -->
		<div class="form-row"><!-- Inicio linha 4 -->
			<div class="col-md-6 form-group">
				<label for="category">Disciplina:</label>
				<select class="form-control" name="category">
					<option value="administration">Administração</option>
					<option value="accounting_sciences">Ciências Contábeis</option>
					<option value="law">Direito</option>
					<option value="engineering">Engenharia</option>
					<option value="human_resources">Recursos Humanos</option>
					<option value="technology">Tecnologia</option>
				</select>
			</div>
			<div class="col-md-6 form-group mt-4">
				<button class="btn btn-success btn-block mt-2" type="submit">Criar Livro</button>
			</div>
		</div><!-- Fim Linha 4 -->
	</form>




@endsection