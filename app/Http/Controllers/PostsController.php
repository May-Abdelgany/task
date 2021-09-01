<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResources;
use Illuminate\Http\Request;

class PostsController extends Controller
{
     public function index()
    {
        $posts=post::all();
        return $posts;
    }

    public function sub()
    {
        $posts=post::paginate(15);
        return $posts;
    }

    public function show(Request $request ,Post $post)
    {
        $post=post::find($post);
        return $post;
    }

    public function store(PostRequest $request)
    {
        $post=new post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
       // return new PostResources($post);
        return $post;
    }

}
