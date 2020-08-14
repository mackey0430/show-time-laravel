<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Answer;
use Auth;

class AnswerController extends Controller
{
     public function show(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);
        // sessionに保存する
        $request->session()->flash('post', $post);
        return view('answer.create',compact('post'));
    }

    //  public function send()
    // {
    //     dd(1);
    //     return view('answer.send');
    // }
    
    public function store(Request $request)
    {
        // sessionから変数を受け取る
        $post=$request->session()->get('post');

        //  回答内容、投稿ID、ログインユーザーIDをanswersテーブルに保存
        // 新しいanswerモデルを作成
        $answer = new Answer;
        //requestから得たbodyを代入
        $answer->body = $request->body;
        // 現在ログイン中のアカウントからuser_idを取得し、代入
        $answer->user_id = Auth::id();
        // 現在のページのpostモデルからpost_idを取得し、代入
        $answer->post_id = $post->id;
        // 保存する
        $answer->save();
        // 変数ポストを渡してanswer.sendを表示する
        // return redirect('/answer/send')->with('answer',$answer);
        return redirect('/answer/send');
        
        // $answer = Answer::create([
        //         'body' => $request->body,
        //         'user_id' => $request->user_id,
        //         'post_id' => $request->post_id,
        //     ]);


    }
}
