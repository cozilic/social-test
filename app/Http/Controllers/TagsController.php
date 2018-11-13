<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tag;
use App\User;

use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    public function show($tag)
    {
        //dd($tag);
        $tags = Tag::where('tag','LIKE','%'.$tag.'%')->get();
        //dd($tags);
        $user = Auth::user();
        return view('home',compact('tags','user'));
    }
}
