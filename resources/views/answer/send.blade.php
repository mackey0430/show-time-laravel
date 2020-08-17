@extends('layouts.app')
@section('content')
<div class="send_container">
    <h1>回答を送信しました</h1>
    <p>他のお題にも答えて</p>
    <p>どんどんを笑いを取ろう。</p>

    <!-- 送信したお題 -->
    <div class="send_post_container">
        <div class="send_post_wrapper">
            <div class="answer_template">
                <img src="{{ asset('image/answer_topic_bar.png') }}" style="width: 100%;">
                <p class="post_container_text" name="body" style="color: black">{{$answer->body}}</p>
            </div>
        </div>
    </div>

    {{-- もっとお題を出すボタン --}}
    <div class="add_post_button_container">
        <div class="add_post_button">
            <a>もっと笑いをとりに行く</a>
        </div>
    </div>

    {{-- twitterでシェアするボタン --}}
    <div class="twitter_share_button_container">
        <div class="twitter_share_button">
            <a><i class="fab fa-twitter" href="#"></i>twitterでシェアする</a> 
        </div>
    </div>
</div>

@endsection