<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Answer;
use Auth;

class AnswerController extends Controller
{
     public function show(int $id)
    {
        $post = Post::find($id);
        return view('answer.create',compact('post'));
    }

     public function send()
    {
        return view('answer.send');
    }
    
    public function store(Request $request, int $post_id)
    {
        //  回答内容、投稿ID、ログインユーザーIDをanswersテーブルに保存
        // 新しいanswerモデルを作成
        $answer = new Answer;
        //requestから得たbodyを代入
        $answer->body = $request->body;
        // 現在ログイン中のアカウントからuser_idを取得し、代入
        $answer->user_id = Auth::id();
        // 現在のページのpostモデルからpost_idを取得し、代入
        $answer->post_id = $post_id->post_id;
        // 保存する
        $answer->save();
        // 変数ポストを渡してanswer.sendを表示する
        dd($answer);
        //  return view('answer.send',compact('answer'));


    
        // $answer = Answer::create([
        //         'body' => $request->body,
        //         'user_id' => $request->user_id,
        //         'post_id' => $request->post_id,
        //     ]);


    }
}
