<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=devicescale-width,initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>
    <div class="profile_header">
        <h3>チェアマンのプロフィール</h3>
        <div class="icon_container">
            <img src="./image/icon.png" class="profile_icon">
            <span class="profile_details">
                <div class="profile_name">
                    五味辻無残
                    <a href="{{ url('/setting') }}">
                    <i class="fas fa-cog setting_icon"></i>
                    </a>
                </div>
                <div class="profile_status">
                    お題数12 回答数12
                </div>
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