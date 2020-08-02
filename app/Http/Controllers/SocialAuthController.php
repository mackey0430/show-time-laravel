<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use DB;


class SocialAuthController extends Controller
{
    // ログイン系の処理をする
    use AuthenticatesUsers;

    /**
     * ユーザーをTwitterの認証ページにリダイレクトする
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */

    public function handleProviderCallback()
    {
        $user = null;
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return redirect()->intended('/');
    }

    private function findOrCreateUser($twitterUser)
    {
        //  $twitterUserの中のidでusersテーブルを検索する。（select * from users WHERE twitter_id = users）

        $id = DB::table('users')->where('twitter_id',$twitterUser->id)->exists();

        // 「1」の操作で見つからなかったら、usersテーブルに新規ユーザーを追加
        if($id = false){
            $user = new User;
            $user = $twitterUser;
            $user->save;
        }

        // 「1」の操作で見つかった場合は、usersテーブルのname, nickname, thumbnail, tokenを更新
        else{
            DB::table('users')->where('twitter_id', $twitterUser->id)->update(['name' => $twitterUser->name]);
            DB::table('users')->where('twitter_id', $twitterUser->id)->update(['nickname' => $twitterUser->nickname]);
            DB::table('users')->where('twitter_id', $twitterUser->id)->update(['thumbnail' => $twitterUser->avatar]);
            DB::table('users')->where('twitter_id', $twitterUser->id)->update(['token' => $twitterUser->token]);
        }

        //  出来上がったuserモデルを返す
        return ;
    }
}
