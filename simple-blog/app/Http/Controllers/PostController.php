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
}
