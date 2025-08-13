@extends('layout')

@section('title', 'Home')

@section('content')
    <h2>Latest Blog Posts</h2>

    @foreach($posts as $post)
        <article>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            
        </article>
    @endforeach
@endsection