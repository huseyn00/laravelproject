@extends('folder.apppp')

@section('content')
<a href="/lost" class="btn btn-default"><i class="fas fa-arrow-left" style="font-size:10px;"></i> Go Back</a>
<h1>{{$lost->title}}</h1>
<div>
    {{$lost->body}}
</div>
<hr>
<small> Written on {{$lost->created_at}} by {{$lost->user->name}}</small>
     <hr>
     <a href="/lost/{{$lost->id}}/edit" class="btn btn-default">Edit</a>   
{!!Form::open(['action'=>['LostController@destroy',$lost->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
     @endsection
