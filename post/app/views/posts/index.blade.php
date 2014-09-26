@extends('layouts.default')
@section('content')
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
body
 { padding-bottom:40px; padding-top:40px; }
</style>
</head>
<body class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2">
<div class="page-header">
	<div class="pull-right">
		{{ link_to_route('sessions.create', 'Create blog') }}
	</div>


	
	<h1>All Posts </h1>


<div class="input-append spancustom">
	{{Form::open(['action' => 'BlogController@search', 'method' => 'GET'])}}
    {{Form::text('search')}}
    {{Form::submit()}}
    {{Form::close()}}
</div>

@foreach ($posts as $post)

	<li>{{ link_to("/posts/{$post->title}", $post->title) }}</li>

@endforeach

{{$posts->links();}}
@if(Auth::check())
<div>
{{Form::open(['action' => 'SessionsController@destroy', 'method' => 'DELETE'])}}



<div class="form-group">{{Form::submit('Sign Out',['class' => 'btn btn-success'])}}</div>

{{Form::close()}}
</div>
@endif
@stop