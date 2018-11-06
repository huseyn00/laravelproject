@extends('folder.apppp')

@section('content')
    <h1>Edit Blog</h1>
    {!! Form::open(['action' =>['LostController@update',$lost->id],'method' => 'POST'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$lost->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$lost->body,['id' => 'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!!Form::close()!!}
       
@endsection