<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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

        $data = $request->all();

        if ($request->image->isValid()) {

            $nameFile = Str::of($request->title)->slug('-') . '.' . $request->image->getClientOriginalExtension();

           $image = $request->image->sToreAs('posts', $nameFile);
            $data['image'] = $image;

        }

        Post::create($data);

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

            if (Storage::exists($post->image))
                Storage::delete($post->image);

        $Post->delete();

        return redirect()
        ->route('posts.index')
        ->with('message' , 'Post deletado com sucesso');
    }


    public function edit($id)
    {
        $Post = Post::find($id);

       if (!$Post = Post::Find($id)){
           return  redirect()->back();
       }

        return view('admin.posts.edit' , compact('Post'));
    }

    public function update(StoreUpdatePost $Request, $id)
    {
        if (!$Post = Post::find($id)) {
            return redirect()->back();

        }

             $data = $request->all();

            if ($request->image->isValid()) {
                if (Storage::exists($post->image))
                    Storage::delete($post->image);

                $nameFile = Str::of($request->title)->slug('-') . '.' . $request->image->getClientOriginalExtension();

               $image = $request->image->sToreAs('posts', $nameFile);
                $data['image'] = $image;

            }

            $Post->update($data);

            return redirect()
                ->route('posts.index')
                ->with('message', 'Post atualizado com sucesso');
    }

    public function search(Request $request)
    {
        $posts = Post::where('title', '=', $request->search)
                            ->orWhere('content', 'LIKE', "%{$request->search}%")
                            ->paginate();
        return view('admin.Posts.index', compact('posts'));
    }


}
