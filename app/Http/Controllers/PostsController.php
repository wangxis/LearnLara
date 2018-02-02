<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
        return view('posts.index', compact('posts'));
        
    	
    }

    public function create() 
    {
    	return view('posts.create');


    }

    public function store() 
    {
        // $post = new Post;
        // $post->title = Request('title');
        // $post->body = Request('body');

        // $post->save();
       /* Post::create([
            'title' => Request('title'),
            'body' => Request('body')
        ]);*/
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'

        ]);

        Post::create(request(['title', 'body']));
        return redirect ('/');
    }
}
