<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use App\Models\Post;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function calculate()
   {
    $flag = 99999;
    $books = Post::all();
    $most = Highlight::find("likes")->count();
    // $most = Highlight::where("likes",">","0")->count();
    // dd($most);
    if ($most > $flag) {
        $higlights = Highlight::all()->Post;
        // dd($higlights);
        return view("home", compact("highlights","books"));
    }
   }
}
