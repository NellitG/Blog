@extends('layout')

@section('title', 'Home')

@section('content')
  <h1 class="page-title">Latest Blog Posts</h1>

  <div class="posts-container">
    @foreach($posts as $post)
      <article class="post-card">
        <h2 class="post-title">
          <a href="{{ route('posts.show', $post->id) }}">
            {{ $post->title }}
          </a>
        </h2>
        <p class="post-excerpt">
          {{ Str::limit($post->content, 150, '...') }}
        </p>
        <a href="{{ route('posts.show', $post->id) }}" class="read-more">Read More →</a>
      </article>
    @endforeach
  </div>
@endsection
