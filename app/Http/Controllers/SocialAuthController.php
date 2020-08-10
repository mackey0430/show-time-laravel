<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
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
        $existsUser = DB::table('users')->where('twitter_id',$twitterUser->id)->exists();

        // 「1」の操作で見つかった場合は、usersテーブルのname, nickname, thumbnail, tokenを更新
        if($existsUser){
            User::where('twitter_id', $twitterUser->id)
                ->update([
                    'name' => $twitterUser->name,
                    'nickname' => $twitterUser->nickname,
                    'thumbnail' => $twitterUser->avatar,
                    'token' => $twitterUser->token,
                ]);
            // 最新のモデルをとってきて、モデルの形で返す。(getだと、配列で返ってくる)
            $user = User::where('twitter_id', $twitterUser->id)->first();
            //  出来上がったuserモデルを返す
            return $user;
        }

        // 「1」の操作で見つからなかったら、usersテーブルに新規ユーザーを追加
        else{
            $user = User::create([
                'name' => $twitterUser->name,
                'nickname' => $twitterUser->nickname,
                'twitter_id' => $twitterUser->id,
                'thumbnail' => $twitterUser->avatar,
                'token' => $twitterUser->token,
            ]);
             //  出来上がったuserモデルを返す
            return $user;
        }
    }
}
