<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
   {
    $books = Post::all();
    // dd($books);
    return view("home", compact("books"));
   }

    public function find($id)
   {
    $books = Post::all();
    $posts = Post::find($id);
    // dd($posts);
    return view("home", compact("posts","books"));
   }

   public function latest()
   {
    $books = Post::all();
    for ($i=0; $i < 5; $i++) {
        $mosted = Post::where("date","<=",now())->get();
    }
    // dd($most);
    return view("home", compact("mosted","books"));
   }
}
