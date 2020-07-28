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

    public function store(Request $request){
        $body = $request->body;
        // 処理をすべて中止して、画面に文字を表示
        // dd($body);

        // 保存処理
        $post = new Post;

        $post->body = $body;
        // $post->user_id = Auth::id();
        $post->user_id = 12345;
        $post->save();
        return redirect('/timeline/index');
    }
}
