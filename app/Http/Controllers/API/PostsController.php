<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function index(){

    	if (request()->expectsJson()) {
             return Post::with('user')->latest()->get();
        }

    }

    public function store(){

    	request()->validate([
            'image_path' => ['required', 'image']
        ]);

        $post = Post::create([
            'user_id' => auth()->id(),
            'image_path' => request()->file('image_path')->store('/public'),
            'description' => request('description'),
            'filter' => request('filter'),
            'likes' => 0

        ])->load('user');

        return $post;
    }
}
