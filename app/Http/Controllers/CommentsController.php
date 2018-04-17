<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post){
        $this->validate(\request(), ['body' => 'bail|required|min:2']);
        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id
        ]);
        return back();
    }
}
