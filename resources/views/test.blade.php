@extends('layout.app')

@section('title', '1-1-rel')

@section('body')
    Welcome {{ $user->name }} <br>
    Your passport #: {{ $usernum->number }}
@endsection
