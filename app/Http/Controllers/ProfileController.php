<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.index');
    }

    // 投稿したお題を表示
    public function display_posted_theme()
    {
        // ログインしてる人のIDを取得
        $post->user_id = Auth::id();
        // postsテーブルの中でuser_idが$postのuser_idが同じものを取得する。
        $posts = Post::where('user_id', $post->user_id)->first();
        return view('timeline.index',compact('posts'));
    }
}
