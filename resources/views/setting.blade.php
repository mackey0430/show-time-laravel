<!DOCTYPE HTML>
<html lang="ja" class="container">

<head>
    <meta charset="utf-8">
    <title>Setting</title>
    <meta name="viewport" content="width=devicescale-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/setting.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="container">
        <!-- <script src="https://kit.fontawesome.com/73ed87693c.js" crossorigin="anonymous"></script> -->
        <!-- ヘッダー -->
        <header>
            <div style="flex-direction: row;">
                <i class="fas fa-cog" style="font-size: 20px;padding: 5px 0; padding: 2px;"></i>
                <span style="width: 50px; line-height: 2px;font-size: 19px;">
                    設定
                </span>
            </div>
        </header>
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
    
    <!-- ボトムタブバー -->
    <div class="buttom_tab_wrapper">
        <div class="buttom_tab">
            <!-- 友達のお題ボタン -->
            <a href="{{ url('/timeline') }}" class="buttom_tab_firend_post">
                <i class="fas fa-users friend_post_icon">
                    </br>
                    <span class="buttom_tab_text">友達のお題</span>
                </i>
            </a>
            <!-- お題作成ボタン -->
            <a href="{{ url('/post_create') }}" class="buttom_tab_button">
                <img src="./image/Buttom_tab_post_create_button.png" class="add_post_icon">
                </br>
                <span class="buttom_tab_text">お題を作る</span>
            </a>
            <!-- アカウントボタン -->
            <a href="{{ url('/profile') }}" class="buttom_tab_account">
                <i class="fas fa-user-circle account_icon">
                    </br>
                    <span class="buttom_tab_text">アカウント</span>
                </i>
            </a>
        </div>
    </div>

</body>

</html>