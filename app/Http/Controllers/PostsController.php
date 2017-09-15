<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::latest()->get();
        $posts = Post::orderBy("created_at", "desc")->get();
    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function show($id)
    {
        $post = Post::find($id);

    	return view('posts.show', compact('post'));
    }

    public function store(){

        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
            ]);

        Post::create([
            'title' => request('title'), 
            'body' => request('body')
        ]);

        //Create a new post using the request data

        //Save it to the database

        //And then redirect to the home page
        return redirect('/posts');
    }
}
