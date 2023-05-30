<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id){
        $books = Post::find($id);
        return view("detail",compact('books'));
    }
}
