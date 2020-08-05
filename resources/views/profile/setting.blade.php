@extends('layouts.app')
@section('content')

    <div class="setting_container">
        <div class="setting_wrapper">
            <div class="setting_header">
                    <i class="fas fa-cog"></i>
                        設定
            </div>
            <p>投稿の設定</p>
            <div class="auto_post">
            <span class="auto_post_on">自動投稿ON</span>
            <div class="switch">
                <label class="switch__label">
                <input type="checkbox" class="switch__input"/>
                <span class="switch__content"></span>
                <span class="switch__circle"></span>
                </label>
            </div>
            </div>
            <p>アカウント管理</p>
            <div class="logout">
            <a href=#>ログアウトする</a>
            </div>

        </div>
    </div>


 @endsection