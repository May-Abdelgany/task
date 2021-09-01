<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostsController extends Controller
{
     public function index()
    {
        $posts=post::all();
        return $posts;
    }
}
