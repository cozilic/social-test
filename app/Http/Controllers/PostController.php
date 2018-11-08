<?php

namespace App\Http\Controllers;

use App\Post;
use App\Likes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function like(Post $post)
    {
        $post->likeBy();
        return redirect()->back();
    }

    public function unlike(Post $post)
    {
        $post->unlikeBy(); // current user
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $text = Post::parseText($request->body);
            $post = new Post();
            $post->user_id = Auth::user()->id;
            $post->body = $text;
            $post->visibility = $request->visibility;
            if ($request->image == null) {
            }else{
                $file = $request->image;
                $file->move('uploads/'. Auth::user()->id.'/', $file->getClientOriginalName());
                $file = $file->getClientOriginalName();
                $post->image = $file;
            }

            $hash = Post::parseHash($request->body);
            $post->tags = $hash;

                $post->save();

//            $post->user->mention($request->mentions);
        return redirect()->back();


//            return $comment;

//        if ($request->image == null) {
//            Post::create([
//                'user_id' => Auth::user()->id,
//                'body' => $request->text,
//                'visibility' => $request->visibility,
//                ]);
//            }else{
//                $file = $request->image;
//                $file->move('uploads/'. Auth::user()->id.'/', $file->getClientOriginalName());
//                $file = $file->getClientOriginalName();
//
//                $post = new Post();
//                $post->user_id = Auth::user()->id;
//                $post->body = $request->text;
//                $post->visibility = $request->visibility;
//                $post->image = $file;
//                $post->save();


//                Post::create([
//                    'user_id' => Auth::user()->id,
//                    'image' => $file,
//                    'visibility' => $request->visibility,
//                ]);
//            }
//            return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}