@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default" role="button">Go back</a>
    <div>
    <h1>{{$post->title}}</h1>
    <small>Written on: {{$post->created_at}}</small>
    <p>{{$post->body}}</p>
    <hr>
    
    </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Update</a>
    {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) }}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'] )}}
    {{Form::close()}}
@endsection