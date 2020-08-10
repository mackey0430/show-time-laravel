<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// postモデルを読み込む
use App\Post;

use Auth;

class PostsController extends Controller
{
    public function create(){
        return view("posts.create");
    }

    public function send(){
        return view("posts.send");
    }

    public function store(Request $request){
        $body = $request->body;

        // 保存処理
        $post = new Post;

        $post->body = $body;
        // ログインしてる人のIDを取得
        $post->user_id = Auth::id();
        $post->save();
        return redirect('/posts/send');
    }

}
