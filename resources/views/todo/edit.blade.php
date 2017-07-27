@extends('todo.create')

@section('editId', $item->id)
@section('editMethod')
	{{ method_field('PUT') }} 
@endsection
@section('editTitle', $item->title)
@section('editBody', $item->body)
