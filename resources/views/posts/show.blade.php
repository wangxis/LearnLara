@extends('layouts.master')
@section('content')
	<dir class="col-sm-8 blog-main">
		<h1>{{ $post->title }}</h1>
		{{ $post->body}}
		
	</dir>


@endsection