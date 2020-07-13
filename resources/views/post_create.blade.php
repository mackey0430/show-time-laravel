<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PostCreate</title>
    <meta name="viewport" content="width=devicescale-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/postcreate.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <!-- ヘッダー -->
    <div class="header_container">
        <img src= "{{ asset('image/showtime_logo.png') }}" class="header_logo">
    </div>
        
    <!-- ヘッダー用の空白 -->
    <div class="header_margin"></div>

    <div class="message_container">
        <div class="message_wrapper">
            <h1>お題を作ろう</h1>
            <h4>
                お題を作って友達とシェアしよう。
                </br>
            </h4>
        </div>
    </div>

    <!-- お題作成 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="./image/topic_bar.png" style="width: 100%;">
                <textarea class="post_container_text" placeholder="&#13;&#10;お題の内容を入力..."></textarea>
            </div>
            <div class="answer_button_container">
                <div class="answer_button_wrapper">
                    <!-- 出題ボタン -->
                    <a href="answer.html" class="answer_button">
                        出題する
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <a href="#">・プライバシーポリシー</a>
        <a href="#">・利用規約</a>
        <a href="#">・アプリの使い方</a>　
    </footer>
    <!-- ボトムタブバー -->
    <div class="buttom_tab">
        <!-- 友達のお題ボタン -->
        <a href="Timeline.html" class="buttom_tab_firend_post">
            <i class="fas fa-users friend_post_icon">
            </br>
            <span class="buttom_tab_text">友達のお題</span>
        </i>
        </a>
        <!-- お題作成ボタン -->
        <a href="PostCreate.html" class="buttom_tab_button">
            <img src="./image/Buttom_tab_post_create_button.png" class="add_post_icon">
            </br>
            <span class="buttom_tab_text">お題を作る</span>
        </a>
        <!-- アカウントボタン -->
        <a href="Profile.html" class="buttom_tab_account">
            <i class="fas fa-user-circle account_icon">
    </br>
    <span class="buttom_tab_text">アカウント</span>
</i>
        </a>
    </div>
</body>

</html>