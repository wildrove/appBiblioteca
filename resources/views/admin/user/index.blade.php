@extends('layouts.app')

@section('content')

			<div class="row">
		        <div class="col-md-12">
		        	<div class="mt-5 mb-3">
		        		<a class=" btn btn-dark mb-3 ml-2" href="{{route('admin.books.index')}}" data-toggle="tooltip" title="livros" style="float: right">
		        			<i class="fas fa-book fa-lg"></i>
		        		</a>
		        		<a class=" btn btn-dark mb-3" href="{{route('admin.users.create')}}" data-toggle="tooltip" title="novo usuário" style="float: right">
		        			<i class="fas fa-user-plus fa-lg"></i>
		        		</a>
		        		<h3 class="">Biblioteca - Usuários</h3>
		        	</div>
		        	<div class="table-responsive">
		     			<table id="mytable" class="table table-bordred table-striped">  
		                   <thead class="">    
			                   	<th><input type="checkbox" id="checkall" /></th>
			                   	<th>Nome</th>
			                    <th>Sobrenome</th>
			                    <th>Usuário</th>
			                    <th>Tipo Usuário</th>     
			                    <th>Email</th>
			                    <th>Editar</th>
			                    <th>Excluir</th>
		                   </thead>
		    			   <tbody>
		    			   @foreach($users as $user)
							    <tr>
								    <td><input type="checkbox" class="checkthis" /></td>
								    <td>{{$user->first_name}}</td>
								    <td>{{$user->last_name}}</td>
								    <td>{{$user->user_name}}</td>
								    <td>{{$user->user_type}}</td>
								    <td>{{$user->email}}</td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="editar">
								    		<a class="btn btn-primary btn-xs" href="{{route('admin.users.edit', ['user' => $user->id])}}"  >
								    			<!-- Botão de editar -->
								    			<i class="fas fa-user-edit"></i>
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
						{{$users->links()}}    
		            </div>      
		        </div>
			</div>
		</div>

		<!-- Modal de Excluir -->
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<form class="form" action="{{route('admin.users.destroy', ['user' => $user->id])}}" method="POST">
		    			
		    			@csrf
		    			@method('DELETE')
		    			
			        	<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
			        		<h4 class="modal-title custom_align" id="Heading">Excluir Usuário</h4>
			      		</div>
			          	<div class="modal-body">	
			          			<div class=" form-control alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>Tem certeza que deseja excluir este usuário?
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