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
		{{ link_to_route('posts.index', 'Back') }}
	</div>

	<h1>Create Blog </h1>
</div>

	{{Form::open(['route' => 'posts.store']) }}
<div class="form-group">
	{{Form::label('title','Title:')}}
	{{Form::text('title', null ,[ 'class'=>'form-control'])}}
	{{$errors->first('title')}}
</div>


<div class="form-group">
	{{Form::label('blog','Blog:')}}
	{{Form::textarea('blog',null, ['class' => 'form-control'])}}
	{{$errors->first('blog')}}
</div>


<div class="form-group">
	{{Form::submit('Create Blog',['class' => 'btn btn-success']) }}
</div>

	{{Form::close()}}
@stop

