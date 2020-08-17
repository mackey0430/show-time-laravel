@extends('layouts.app')
@section('content')
<div class="title_container">
<h1>他のお題を見よう</h1>
<h3>お題をタップすると他の人の回答が見えるよ</h3>
</div>
    <!--  回答フォーム1 -->
    @foreach ($posts as $post)
    <div class="post_container">
        <div class="post_wrapper">

            <div class="post_template">
            <a href="#">
                <img src="{{ asset('image/topic_bar.png') }}" style="width: 100%;">
                <p class="post_container_text">
                    {{$post->body}}
                </p>
            </a>

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
                    <a href="{{ route('answer.show', ['id' => $post->id]) }}" class="answer_button">
                        回答する
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach 

    <footer>
        <a href="#">・プライバシーポリシー</a>
        <a href="#">・利用規約</a>
        <a href="#">・アプリの使い方</a>
    </footer>

@endsection
