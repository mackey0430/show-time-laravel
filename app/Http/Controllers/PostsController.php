<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// postモデルを読み込む
use App\Post;
// answerモデルを読み込む
use App\Answer;

use Auth;

use DB;

class PostsController extends Controller
{
    public function create(){
        dd(1);
        return view("posts.create");
       
        
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
        return view('posts.send',compact('post'));
    }

    public function show(Request $request)
    {
        $id = $request->id;

        // 確認したいSQLの前にこれを仕込んで
        // DB::enableQueryLog();

        // postモデルを取得(Answerも紐づけられている)
        $post = Post::find($id);

        $answers = $post->answers;

        // Post::with('answers')->find($id);

        // dumpする
        // dd(DB::getQueryLog());

        return view('posts.answer_list',compact('post','answers'));
    }

}   
