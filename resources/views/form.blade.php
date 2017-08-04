@extends('layout.app')

@section('title', 'Form')

@section('body')
	<br>
	<div class="container">
		<div class="col-lg-offset-4 col-lg-4">
		@if (count($errors) > 0)
			@foreach ($errors->all() as $error)
				<p class="alert alert-danger">{{$error}}</p>			
			@endforeach
		@endif
			<form action="form" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<input class="form-control" type="text" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="email" placeholder="Email" >
				</div>
				<div class="form-group">
					<input class="btn btn-success" type="submit">
				</div>
			</form>
		</div>
	</div>
@endsection
