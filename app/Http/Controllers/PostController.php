<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = \Illuminate\Support\Facades\DB::table('posts')->get();
        return view('posts')->with('posts',$posts);
    }
    public function create(){
        return view('create');
    }

    public function getById($id){

        $helper = Post::where('id',$id)->get();
        return view('getPostById')->with('Post',$helper);
    }
}
