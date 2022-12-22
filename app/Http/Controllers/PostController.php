<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    //

    public function index()
    {
        $post = Post::latest()->paginate(8); 
        return view ('index')
        ->withPost($post);
    }

    public function create()
    {
        return view ('add');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->content = $request->content;
        $post->save();

        return redirect('post');
    }

    public function edit($id)
    {
        $post =Post::find($id);
        return view('edit')
        ->with('post',$post);
    }

    public function baca($id)
    {
        $post = Post::find($id);
        return view('baca')
        ->with('post',$post);
    }

    public function update (Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->content = $request->content;
        $post->save();

        return redirect('post');
    }

    public function hapus ($id)
    {   
        $post = Post::find($id);
        $post->delete();

        return redirect('/post');
    }
}
