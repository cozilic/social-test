<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    public function show($tag)
    {
        //dd($tag);
        $tags = Post::where('tags','LIKE','%'.$tag.'%')->get();
        $user = Auth::user();
        return view('tags.show',compact('tags','user'));
    }
}
