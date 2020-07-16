<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Timeline</title>
    <meta name="viewport" content="width=devicescale-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <!-- ヘッダー -->
    <div class="header_container">
        <img src="./image/showtime_logo.png" class="header_logo">
    </div>

    <!-- ヘッダー用の空白 -->
    <div class="header_margin"></div>

    <!--  回答フォーム1 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="./image/topic_bar.png" style="width: 100%;">
                <textarea class="post_container_text">ネコがギリギリ言えそうな人間の言葉を教えて下さい</textarea>
            </div>
            <div class="post_button_wrapper">
                <div class="like_button_wrapper">
                    <!-- ライクボタン -->
                    <a class="fas fa-heart" href="#"></a>
                    <!-- twiierボタン -->
                    <a class="fab fa-twitter" href="#"></a>
                </div>
                <div class="answer_button_wrapper">
                    <!-- 回答ボタン -->
                    <a href="Answer.html" class="answer_button">
                        回答する
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  回答フォーム1 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="./image/topic_bar.png" style="width: 100%;">
                <textarea class="post_container_text">発明王エジンソ。まだ公にされていないヤバい発明とは？</textarea>
            </div>
            <div class="post_button_wrapper">
                <div class="like_button_wrapper">
                    <!-- ライクボタン -->
                    <a class="fas fa-heart" href="#"></a>
                    <!-- twiierボタン -->
                    <a class="fab fa-twitter" href="#"></a>
                </div>
                <div class="answer_button_wrapper">
                    <!-- 回答ボタン -->
                    <a href="Answer.html" class="answer_button">
                        回答する
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  回答フォーム1 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="./image/topic_bar.png" style="width: 100%;">
                <textarea class="post_container_text">人工知能AI。まだ世に知られていない意外な弊害を教えてください</textarea>
            </div>
            <div class="post_button_wrapper">
                <div class="like_button_wrapper">
                    <!-- ライクボタン -->
                    <a class="fas fa-heart" href="#"></a>
                    <!-- twiierボタン -->
                    <a class="fab fa-twitter" href="#"></a>
                </div>
                <div class="answer_button_wrapper">
                    <!-- 回答ボタン -->
                    <a href="Answer.html" class="answer_button">
                        回答する
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  回答フォーム1 -->
    <div class="post_container">
        <div class="post_wrapper">
            <div class="post_template">
                <img src="./image/topic_bar.png" style="width: 100%;">
                <textarea class="post_container_text">透明人間という設定のピン芸人「Mr.スケルトン」の持ちネタとは？</textarea>
            </div>
            <div class="post_button_wrapper">
                <div class="like_button_wrapper">
                    <!-- ライクボタン -->
                    <a class="fas fa-heart" href="#"></a>
                    <!-- twiierボタン -->
                    <a class="fab fa-twitter" href="#"></a>
                </div>
                <div class="answer_button_wrapper">
                    <!-- 回答ボタン -->
                    <a href="Answer.html" class="answer_button">
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