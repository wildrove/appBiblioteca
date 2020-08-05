@extends('layouts.app')

@section('content')

			<div class="row">
		        <div class="col-md-12">
		        	<div class="table-responsive mt-5">
		        		<h4 class="mb-3">Bilioteca - Usuários</h4>
		     			<table id="mytable" class="table table-bordred table-striped border">  
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
								    		<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
								    			<span class="glyphicon glyphicon-pencil">Editar</span>
								    		</button>
								    	</p>
								    </td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="excluir">
								    		<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
								    			<span class="glyphicon glyphicon-trash">Excluir</span>
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
		<!--Modal de Edição -->
		<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		        	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		        			<h4 class="modal-title custom_align" id="Heading">Editar Usuário</h4>
		      		</div>
		        	<div class="modal-body">
		        		<form class="form" action="" method="">
		        			
		        				<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Atualizar</button>
		      				</div>
		        		</form>	
		      		</div>
		    	</div>
		    <!-- /.modal-content --> 
			</div>
		      <!-- /.modal-dialog --> 
		</div>
		<!-- Modal de Excluir -->
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		        	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		        		<h4 class="modal-title custom_align" id="Heading">Excluir Dados</h4>
		      		</div>
		          	<div class="modal-body"> 
		       			<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>Tem certeza que deseja excluir?
		       			</div>  
		      		</div>
		        	<div class="modal-footer ">
		        		<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>Sim</button>
		        		<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Não</button>
		      		</div>
		    	</div>
		    <!-- /.modal-content --> 
		  	</div>
		<!-- Jquery checkbox select -->
		<script src="{{ asset('/js/app.js') }}"></script>
		
@endsection