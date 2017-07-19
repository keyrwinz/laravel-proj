@extends('layout.app')

@section('title', '1-1-rel')

@section('body')
    Numbers of {{ $user->name }}: <br>
    @foreach($mobiles as $mobile)
		{{ $mobile->number }} <br>
    @endforeach
@endsection
