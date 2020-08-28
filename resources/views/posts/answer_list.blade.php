@extends('layouts.app')
@section('content')
<body>
    <div class="answer_list_container">
            <h1>投稿されたお題</h1>
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
                            <a class="far fa-heart" href="#"></a>
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

            <h1>他の人の回答</h1>
            @foreach($answers as $answer)
            <div class="answered_container">
                <div class="answer_wrapper">
                    <div class="answer_template">
                        <img src="{{ asset('/image/answer_topic_bar.png') }}" style="width: 100%;">
                        <p class="post_container_text">
                            {{$answer->body}}
                        </p>
                    </div>
                    <div class="post_button_wrapper">
                        <div class="like_button_wrapper">
                            <!-- ライクボタン -->
                            <a class="far fa-heart" href="#"></a>
                            <!-- twiierボタン -->
                            <a class="fab fa-twitter" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    @endsection