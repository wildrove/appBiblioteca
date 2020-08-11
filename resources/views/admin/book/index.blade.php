@extends('layouts.app')

@section('content')

			<div class="row">
		        <div class="col-md-12">
		        	<div class="mt-5 mb-3">
		        		<a class=" btn btn-dark mb-3" href="{{route('admin.users.index')}}" data-toggle="tooltip" title="usuários" style="float: right">
		        			<i class="fas fa-users fa-lg"></i>
		        		</a>
		        		<a class=" btn btn-dark mb-3 mr-2" href="" data-toggle="tooltip" title="novo livro" style="float: right">
		        			<i class="fas fa-book-medical fa-lg"></i>
		        		</a>
		        		<h4 class="h4">Biblioteca - Livros</h4>
		        	</div>
		        	<div class="table-responsive">
		     			<table id="mytable" class="table table-bordred table-striped">  
		                   <thead class="">    
			                   	<th><input type="checkbox" id="checkall" /></th>
			                   	<th>Nome Livro</th>
			                    <th>Nome Autor</th>
			                    <th>Usuário</th>
			                    <th>Nome Editora</th>     
			                    <th>Data Lançamento</th>
			                    <th>Editar</th>
			                    <th>Excluir</th>
		                   </thead>
		    			   <tbody>
		    			   @foreach($books as $book)
							    <tr>
								    <td><input type="checkbox" class="checkthis" /></td>
								    <td>{{$book->book_name}}</td>
								    <td>{{$book->author_name}}</td>
								    <td>{{$book->publishing_name}}</td>
								    <td>{{$book->release_date}}</td>
								    <td>{{$book->book_genre}}</td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="editar">
								    		<a class="btn btn-primary btn-xs" href=""  >
								    			<!-- Botão de editar -->
								    			<i class="fas fa-edit"></i>
								    		</a>
								    	</p>
								    </td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="excluir">
								    		<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
								    			<!-- Botão de excluir -->
								    		<i class="fas fa-trash"></i>
								    		</button>
								    	</p>
								    </td>
							    </tr>
							@endforeach
		    				</tbody>
						</table>
						<div class="clearfix"></div>
						{{$books->links()}}    
		            </div>      
		        </div>
			</div>
		</div>

		<!-- Modal de Excluir -->
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<form class="form" action="" method="get">
		    			<input type="hidden" name="_token" value="{{csrf_token()}}">
			        	<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
			        		<h4 class="modal-title custom_align" id="Heading">Excluir Livro</h4>
			      		</div>
			          	<div class="modal-body">	
			          			<div class=" form-control alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>Tem certeza que deseja excluir este livro?
			       			</div> 
			      		</div>
			        	<div class="modal-footer ">
			        		<button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>Sim</button>
			        		<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Não</button>
			      		</div>
		      		</form>
		    	</div>
		    <!-- /.modal-content --> 
		  	</div>
		<!-- Jquery checkbox select -->
		<script src="{{ asset('/js/app.js') }}"></script>

@endsection