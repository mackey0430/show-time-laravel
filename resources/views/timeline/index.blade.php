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
                <a href = "{{ url("posts/{$post->id}")}}">
                    <img src="{{ asset('image/topic_bar.png') }}" style="width: 100%;">
                    <p class="post_container_text">
                        {{$post->body}}
                    </p>
                </a>
            </div>

            <div class="post_button_wrapper">
                <div class="like_button_wrapper">

                   <!-- ライクボタン -->
                        @if (Auth::check() && $post->likes->contains(function ($user) {
                            // ログインしているかつ、この投稿のいいねをしているユーザーの中に自分が含まれているか
                            return $user->id === Auth::user()->id;
                        }))
                        <a class="fas fa-heart removeLike" href="#" data-id="{{$post->id}}">
                            <span class="count" id ="count">{{$post->likes()->count()}}</span>
                        </a>
                        @else
                        <a class="far fa-heart like" href="#" data-id="{{$post->id}}">
                            <span class="count" id ="count">{{$post->likes()->count()}}</span>
                        </a>
                        @endif
                        <script>
                            console.log(count);
                        </script>
                    <!-- twiierボタン -->
                    <a class="fab fa-twitter" href="http://twitter.com/share?url=https://www.youtube.com/&text=あああ&hashtags=大喜利"></a>
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
