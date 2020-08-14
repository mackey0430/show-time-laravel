@extends('layouts.app')
@section('content')
  
    <!-- 回答するお題 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="{{ asset('/image/topic_bar.png') }}" style="width: 100%;">
            <p class="post_container_text">{{$post->body}}</p>
            </div>
        </div>
    </div>
    
    <!-- 回答欄 -->
    <form method="post" action="{{ url('/answer/store') }}">
    <!-- csrf攻撃対策 -->
    @csrf 
        <div class="answer_container">
            <div class="answer_wrapper">
                <div class="answer_template">
                    <img src="{{ asset('/image/answer_topic_bar.png') }}" style="width: 100%;">
                    <textarea class="answer_container_text" placeholder="ここに回答を&#13;&#10;入力してください" name="body"></textarea>
                </div>
                <div class="answer_button_container">
                    <div class="answer_button_wrapper">
                        <!-- 回答ボタン -->
                        <a href="{{ route('answer.show', ['id' => $post->id]) }}" class="answer_button">
                        回答する
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <footer>
        <a href="#">・プライバシーポリシー</a>
        <a href="#">・利用規約</a>
        <a href="#">・アプリの使い方</a>　
    </footer>
    
@endsection