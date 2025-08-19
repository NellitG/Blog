<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Fetch all posts from the database
        $posts = Post::all();

        //pass the posts to the view
        return view('home', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:10',
        ]);

        // Create a new post
        Post::create($validated);

        // Redirect to the posts index page
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id); //laravel handles the 404 page without letting my app break
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:10',
        ]);

        // Find the post and update it
        $post = Post::findOrFail($id);
        $post->update($validated);

        // Redirect to the posts index page
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }
}
