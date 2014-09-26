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

<h1>Title:{{ $post->title}}</h1>

<h1>Blog:{{ $post->blog}}</h1>




@stop
