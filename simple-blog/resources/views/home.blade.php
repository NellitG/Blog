@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Latest Blog Posts</h1>
    

    @foreach($posts as $post)
        <h2>
        <a href="{{ route('posts.show', $post->id) }}">
            {{ $post->title }}
        </a>
    </h2>

        <article>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            
        </article>
    @endforeach
@endsection