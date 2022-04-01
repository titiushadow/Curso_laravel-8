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

    public function show($id)
    {
        $Post = Post::find($id);

        if (!$Post) {
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show' , compact('Post'));
    }

    public function destroy($id)
    {
        if (!$Post =  Post::find($id))
            return redirect()->route('posts.index');

        $Post->delete();

        return redirect()
        ->route('posts.index')
        ->with('message' , 'Post deletado com sucesso');
    }

    public function search(Request $request)
    {
        $posts = Post::where('title', '=', $request->search)
                            ->orWhere('content', 'LIKE', "%{$request->search}%")
                            ->paginate();
        return view('admin.Posts.index', compact('posts'));
    }


}
