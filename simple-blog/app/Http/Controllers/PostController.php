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

    public function show($id)
    {
        // Fetch a single post by its ID
        $post = \App\Models\Post::find($id);

        // Check if the post exists
        if (!$post) {
            abort(404, 'Post not found');
        }

        return view('posts.show', compact('post'));
    }
}
