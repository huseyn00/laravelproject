@extends('folder.apppp')
@section('content')
<div class="jumbotron text-center">
    <h1>Welcome To Laravel</h1>
    <p>This is te laravel application from the "Laravel From Scratch" Youtube series</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
{{--<h1>{{$title}}</h1>
<p>This is the laravel application from the "Laravel From Scratch" Youtube series</p>--}}
@endsection