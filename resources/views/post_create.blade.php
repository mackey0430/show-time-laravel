@extends('layouts.app')
@section('content')

    <div class="message_container">
        <div class="message_wrapper">
            <h1>お題を作ろう</h1>
            <h4>
                お題を作って友達とシェアしよう。
            </h4>
        </div>
    </div>
　　
    <!-- お題作成 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="./image/topic_bar.png" style="width: 100%;">
                <textarea class="post_container_text" placeholder="&#13;&#10;お題の内容を入力..."></textarea>
            </div>
            <div class="answer_button_container">
                <div class="answer_button_wrapper">
                    <!-- 出題ボタン -->
                    <a href="{{ url('/answer') }}" class="answer_button">
                        出題する
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <a href="#">・プライバシーポリシー</a>
        <a href="#">・利用規約</a>
        <a href="#">・アプリの使い方</a>　
    </footer>
    
@endsection