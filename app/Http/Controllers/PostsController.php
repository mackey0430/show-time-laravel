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
        // $requestのbodyを$bodyに代入
        $body = $request->body;
        // postモデルを作成
        $post = new Post;
        // $bodyを$postに代入
        $post->body = $body;
        // ログインしてる人のIDを取得
        $post->user_id = Auth::id();
        // 保存処理
        $post->save();
        // post.sendを表示し、$postを渡す
        return view('posts.send',['post' => $post]);
    }

}   
