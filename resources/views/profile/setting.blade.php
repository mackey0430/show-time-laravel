@extends('layouts.app')
@section('content')

    <div class="container">
        <!-- <script src="https://kit.fontawesome.com/73ed87693c.js" crossorigin="anonymous"></script> -->

        <!-- ヘッダー -->
        <div class="settting_header">
            <div style="flex-direction: row;">
                <i class="fas fa-cog"></i>
                <span>
                    設定
                </span>
            </div>
        </div>

        <!-- 自動投稿設定 -->
        <h4>投稿の設定</h4>
        <div class="auto_post_setting">
            <span class="auto_post">自動投稿ON</span>
            <!-- 自動投稿on/offスイッチ -->
            <div class="switch">
                <label class="switch__label">            
                    <input type="checkbox" class="switch__input">
                    <span class="switch__content"></span>
                    <span class="switch__circle"></span>
                </label>
            </div>
        </div>

        <!-- アカウント管理 -->
        <h4>アカウント管理</h4>
        <!-- ログアウトボタン -->
        <div class="logout">
            <button type="button" style="font-size: 15px; background-color: rgba(0, 0, 0, 0); border: none;">ログアウトする</button>
        </div>      
    </div>

 @endsection