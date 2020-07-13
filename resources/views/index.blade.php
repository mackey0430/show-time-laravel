<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>answer</title>
    <meta name="viewport" content="width=devicescale-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/answer.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <!-- ヘッダー -->
    <div class="header_container">
        <img src= "{{ asset('image/showtime_logo.png') }}" class="header_logo">
    </div>

    <!-- ヘッダー用の空白 -->
    <div class="header_margin"></div>

    
    <!-- 回答するお題 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="./image/topic_bar.png" style="width: 100%;">
                <textarea class="post_container_text">ネコがギリギリ言えそうな人間の言葉を教えて下さい</textarea>
            </div>
        </div>
    </div>
    
    <!-- 回答欄 -->
    <div class="answer_container">
        <div class="answer_wrapper">
            <div class="answer_template">
                <img src="./image/answer_topic_bar.png" style="width: 100%;">
                <textarea class="answer_container_text" placeholder="ここに回答を&#13;&#10;入力してください"></textarea>
            </div>
            <div class="answer_button_container">
                <div class="answer_button_wrapper">
                    <!-- 回答ボタン -->
                    <a href="answer.html" class="answer_button">
                        回答する
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
    <div class="buttom_tab_wrapper">
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
    </div>

</body>

</html>