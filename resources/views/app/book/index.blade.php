@extends('layouts.app')


@section('content')

	<div class="row mt-5">
		@foreach($books as $book)
			<div class="col-md-3 mb-4 div-card-col zoom">
				<div class="card div-card">
					<div class="">
						<img class="card-img-top img-responsive div-card-img" src="{{ url('storage/books/'.$book->book_image) }}"alt="{{$book->book_name}}">
					</div>
	  				<div class="card-body text-item">
	    				<h5 class="card-title text-primary">{{$book->book_name}}</h5>
	    				<p class="card-text">
	    					@php
	    						$test = substr($book->description, 0, 40);
	    					@endphp
	    					{{$test}}.. <a href="nav-link"><br>(continue lendo...)</a>
	    				</p>
	    				<a href="#" class="btn btn-success btn-block">Alugar</a>
	 				</div>
				</div>
			</div>
		@endforeach
	</div>
	<div class="mt-4">
		{{$books->links()}}
	</div>
@endsection