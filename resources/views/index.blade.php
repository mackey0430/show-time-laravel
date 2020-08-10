@extends('layouts.app')
@section('content')
    <div class="main_container">
        <div class="main_wrapper">
            <h1>みんなで笑おう。</h1>
            <img src="{{ asset('image/index_image.png') }}">
            <p>笑Timeは匿名でお題を出し、</p>
            <p>匿名で答えることができる</p>
            <p>大喜利プラットフォームです。</p>
        </div>
    </div>

    <footer>
        <a href="#">・プライバシーポリシー</a>
        <a href="#">・利用規約</a>
        <a href="#">・アプリの使い方</a>　
    </footer>
@endsection