@extends('layouts.app')

@section('content')
        @if (count($posts) > 0) 
            @foreach($posts as $post)
                <div class="well">
                    <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <small>Written on: {{$post->created_at}}</small>
                    <p>{{$post->body}}</p>
                </div>
            @endforeach  
            {{$posts->links()}}    
        @else
            <p>hatdog</p>
        @endif
@endsection