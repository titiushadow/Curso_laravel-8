<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('admin/Posts/index' , compact('posts'));
    }

    public function create()
    {
        return view('admin/Posts/create');
    }

    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }
}
