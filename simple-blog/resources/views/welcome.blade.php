@extends('layout')

@section('title', 'Welcome')

@section('content')
    <h1>Welcome to My Blog</h1>
    <p>This is a simple blog where I share my thoughts and experiences.</p>
    <p>Feel free to explore the different sections of the blog.</p>
    <a href= "{{ url('/home') }}">Latest Posts</a>

    <h2>Latest Blog Posts</h2>
@endsection
