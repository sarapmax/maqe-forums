<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->latest()->paginate(5);

        return view('forum.index', compact('posts'));
    }
}
