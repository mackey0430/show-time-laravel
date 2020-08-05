@extends('layouts.app')
@section('content')

<h3>チェアマンのプロフィール <a class="fas fa-cog" href="{{ url('profile/setting') }}"></a></h3>
<div class="profile_container">
    <div class="profile_wrapper">
        <!-- アイコン画像 -->
        <div class="profile_icon">
            <img src="{{ asset('image/icon.png') }}" class="icon">
        </div>

        <!-- ユーザー名、お題数、回答数 -->
        <div class="profile_detail">
            <div class="username">
                五味辻無残
            </div>

            <div class="counts_container">
                <div class="counts_wrapper">
                    <div class="counter">
                        <p class="counts">12</p>
                        <p class="title">お題数</p>
                    </div>

                    <div class="counter">
                        <p class="counts">20</p>
                        <p class="title">回答数</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
 </div>

    <!--  回答フォーム1 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="{{ asset('image/topic_bar.png') }}" style="width: 100%;">
                <textarea class="post_container_text">ネコがギリギリ言えそうな人間の言葉を教えて下さい</textarea>
            </div>
            <div class="post_button_wrapper">
                <div class="like_button_wrapper">
                    <!-- ライクボタン -->
                    <a class="fas fa-heart" href="#"></a>
                    <!-- twiierボタン -->
                    <a class="fab fa-twitter" href="#"></a>
                </div>
                <div class="answer_button_wrapper">
                    <!-- 回答ボタン -->
                    <a href="{{ url('/answer') }}" class="answer_button">
                        回答する
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
