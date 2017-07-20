@extends('layout.app')

@section('title', 'Laravel-proj')

@section('body')
	@foreach($users as $user)
		{{ $user }} <br>
	@endforeach
@endsection
