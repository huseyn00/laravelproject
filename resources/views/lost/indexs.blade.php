@extends('folder.apppp')

@section('content')
    <h1>Posts</h3>
        @if(count($losts)>=1)
        @foreach ($losts as $lost)
            <div class="well">
            <h3><a href="/lost/{{$lost->id}}">{{$lost->title}}</a></h3>
                <h5>{{$lost->body}}</h5>
                <small> Written on {{$lost->created_at}} by {{$lost->user->name}}</small>
            </div>
        @endforeach
        {{$losts->links()}}
        @else 
        <p>No posts found</p>
        @endif
@endsection