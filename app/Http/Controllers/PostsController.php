<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    
    public function index(){

        $posts = Posts::allPosts();
        return view("posts.index", compact('posts'));
    }
}
