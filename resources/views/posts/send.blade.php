@extends('layouts.app')
@section('content')

<div class="send_container">
    <h1>お題を送信しました</h1>
    <p>もっとお題を出して</p>
    <p>みんなに答えてもらおう。</p>
    <!-- 送信したお題 -->
    <div class="send_post_container">
        <div class="send_post_wrapper">
            <div class="post_template">
                <img src="{{ asset('image/topic_bar.png') }}" style="width: 100%;">
                <p class="post_container_text" name="body" style="color: black">{{$post->body}}</p>
            </div>
        </div>
    </div>

    {{-- もっとお題を出すボタン --}}
    <div class="add_post_button_container">
        <div class="add_post_button">
            <a>もっとお題を出す</a>
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