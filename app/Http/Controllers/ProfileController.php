<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Answer;
use App\User;

class ProfileController extends Controller
{
    // 投稿したお題を表示
    public function index()
    {
        // ログインしてる人のIDを取得
        $id = Auth::id();

        // 投稿したお題
        // postsテーブルの中でuser_idが$postのuser_idが同じものを取得する。
        $posts = Post::where('user_id', $id)->get();

        // postsテーブルの中でuser_idが$postのuser_idが同じもののpost_idを取得を取得する。
        // $postlike = Post::where('user_id', $id)->get('id');

        // 回答したお題
        // answersテーブルの中でuser_idが$answerのuser_idが同じものを取得する。
        $answers = Answer::where('user_id', $id)->get();

        // profileに変数を渡して表示
        return view('profile.index',compact('posts','answers'));
    }
}