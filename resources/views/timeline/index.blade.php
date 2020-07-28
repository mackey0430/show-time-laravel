@extends('layouts.app')
@section('content')

    <!--  回答フォーム1 -->
    @foreach ($posts as $post)
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="{{ asset('image/topic_bar.png') }}" style="width: 100%;">
                <p class="post_container_text">
                    {{ $post->body}}
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
                    <a href="Answer.html" class="answer_button">
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
