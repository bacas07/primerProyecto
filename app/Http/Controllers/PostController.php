<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect(route('post.index'));
    }

    public function show(string $id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Post::find($id);      

        return view('post.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        
        $post->update($request->all());

        return redirect(route('post.index'));
    }

    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect(route('post.index'));
    }
}