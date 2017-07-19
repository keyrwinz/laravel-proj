@extends('layout.app')

@section('title', '1-1-rel')

@section('body')
	@foreach($users as $user)
		{{ $user }} <br>
	@endforeach
@endsection
