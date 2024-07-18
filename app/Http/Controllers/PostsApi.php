<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsApi extends Controller
{
    public function index()
    {
        return Post::all();
    }
    public function store()
    {
        return Post::create([
            'Content' => request('Content')
        ]);
    }


}

