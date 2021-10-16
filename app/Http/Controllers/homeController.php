<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class homeController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->paginate(6);

        return view('home')->with([
            'posts' => $posts
        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('show')->with([
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'body' => 'required|min:10|max:1000',

        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->image = "https://via.placeholder.com/640x480.png/0011ff?text=sequi";
        $post->save();
        return redirect()->route('home')->with([
            'success' => 'article ajoute'
        ]);
    }
}
