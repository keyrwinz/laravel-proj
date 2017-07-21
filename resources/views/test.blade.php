@extends('layout.app')

@section('title', 'Laravel-proj')

@section('body')
	{{ $post->comments }}
	{{ $video->comments}}
@endsection
