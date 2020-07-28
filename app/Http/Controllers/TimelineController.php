<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class TimelineController extends Controller
{
     public function index()
    {
        // 投稿を全件取得
        $posts  = Post::all();

        // dd($posts);

        // timelineのindexを表示して、変数postsも渡す
        return view('timeline.index',compact('posts'));
    }

}
