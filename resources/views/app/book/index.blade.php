@extends('layouts.app')


@section('content')

	<div class="row mt-5 div-card-row">
		@foreach($books as $book)
		@php
			$book_name = ucwords($book->book_name);
		@endphp
			<div class="col-md-3 mb-4 div-card-col zoom">
				<div class="card div-card shadow shadow-md">
					<div class="">
						<img class="card-img-top img-responsive div-card-img" src="{{ url('storage/books/'.$book->book_image) }}"alt="{{$book->book_name}}">
					</div>
	  				<div class="card-body d-flex flex-column text-item">
	    				<h5 class="card-title">{{$book_name}}</h5>
	    				<p class="card-text">
	    					@php
	    						$test = substr($book->description, 0, 50);
	    					@endphp
	    					{{$test}}.. <a href="nav-link"><br>(continue lendo...)</a>
	    				</p>
	    				<a href="#" class=" mt-auto btn btn-success btn-block btn-card-rent">Alugar</a>
	 				</div>
				</div>
			</div>
		@endforeach
	</div>
	<div class="mt-4">
		{{$books->links()}}
	</div>
@endsection