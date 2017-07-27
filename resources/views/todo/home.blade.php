@extends('layout.app')

@section('body')
	<br>
	@include('todo.partials.message')
	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-6 col-lg-offset-3">
		<center><h1>Todo Lists</h1></center>
		<ul class="list-group col-lg-10">
			@foreach($todos as $todo)
				<li class="list-group-item">
					<a href="{{'todo/'.$todo->id}}">{{ $todo->title }}</a>
					<span class="pull-right">{{ $todo->created_at->diffForHumans() }}</span>
				</li>
			@endforeach
		</ul>
		<ul class="list-group col-lg-2" >
			@foreach($todos as $todo)
				<li class="list-group-item" class="col-lg-4">
					<a href="{{'todo/'.$todo->id.'/edit'}}">Edit</a>
				</li>
			@endforeach
		</ul>
	</div>
@endsection
