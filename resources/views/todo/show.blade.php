@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-offset-4 col-lg-4 ">
		<h1>{{$item->title}}</h1>
		<p><h4>{{$item->body}}</h4></p>
	</div>
@endsection
