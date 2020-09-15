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

    // $idには投稿のID
    public function like(Request $request){
        $id = $request->id;
        // postモデルとlikesメソッドを実行する
        $post = Post::find($id);
        // $post = Post::find($id)->with('likes');

        // いいね実行
        $post->likes()->attach(Auth::id());

        return response()
            ->json(['success' => 'いいね完了！' , 'count' => $post->likes()->count()]);
    }

    // $idには投稿のID
    public function removeLike(Request $request){
        $id = $request->id;
        // postモデルとlikesメソッドを実行する
        $post = Post::find($id);
        // $post = Post::find($id)->with('likes');

        // いいね実行
        $post->likes()->detach(Auth::id());

        return response()
            ->json(['remove' => 'いいね解除！','count' => $post->likes()->count()]);
    }

}   
