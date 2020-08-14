@extends('layouts.app')
@section('content')

<div class="profile_header">
    {{ Auth::user()->name }}のプロフィール <a class="fas fa-cog" href="{{ url('profile/setting') }}"></a>
</div>

<div class="profile_container">
    <div class="profile_wrapper">
        <!-- アイコン画像 -->
        <div class="profile_icon">
            <img src="{{ asset('image/icon.png') }}" class="icon">
        </div>

        <!-- ユーザー名、お題数、回答数 -->
        <div class="profile_detail">
            <div class="username">
                {{ Auth::user()->name }}
            </div>

            <div class="counts_container">
                <div class="counts_wrapper">
                    <div class="counter">
                    <p class="counts">{{$posts->count()}}</p>
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

{{-- タブ --}}
 <div class="area">
     {{-- 投稿したお題タブ --}}
    <input type="radio" name="tab_name" id="tab1" checked>
    <label class="tab_class" for="tab1">投稿したお題</label>
    <div class="content_class">
        <!--  自分が投稿したお題 -->
        @foreach ($posts as $post)
        <div class="post_container">
            <div class="post_wrapper">
                <div class="post_template">
                    <img src="{{ asset('image/topic_bar.png') }}" style="width: 100%;">
                    <p class="post_container_text">
                        {{$post->body}}
                    </p>
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
                        <a href="{{ url('/answer/create') }}" class="answer_button">
                            回答する
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach 
    </div>

    
    {{-- 回答したお題タブ --}}
    <input type="radio" name="tab_name" id="tab2" >
    <label class="tab_class" for="tab2">回答したお題</label>
    <div class="content_class">
    <!-- 自分が回答したお題 -->
    <div class="answer_container">
        <div class="answer_wrapper">
            <div class="answer_template">
                <img src="{{ asset('/image/answer_topic_bar.png') }}" style="width: 100%;">
                <textarea class="answer_container_text" placeholder="ここに回答を&#13;&#10;入力してください"></textarea>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
