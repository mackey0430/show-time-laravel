<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class ProfileController extends Controller
{

    // 投稿したお題を表示
    public function index()
    {
        // ログインしてる人のIDを取得
        $id = Auth::id();
        // postsテーブルの中でuser_idが$postのuser_idが同じものを取得する。
        $posts = Post::where('user_id', $id)->get();
        return view('profile.index',compact('posts'));
    }
}
