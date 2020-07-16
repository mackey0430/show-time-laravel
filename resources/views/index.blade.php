<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>index</title>
    <meta name="viewport" content="width=devicescale-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
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

    <!-- ボトムタブバー -->
    <div class="buttom_tab_wrapper">
        <div class="buttom_tab">
            <!-- 友達のお題ボタン -->
            <a href="timeline.blade.php" class="buttom_tab_firend_post">
                <i class="fas fa-users friend_post_icon">
                    </br>
                    <span class="buttom_tab_text">友達のお題</span>
                </i>
            </a>
            <!-- お題作成ボタン -->
            <a href="postcreate.blade.php" class="buttom_tab_button">
                <img src="./image/Buttom_tab_post_create_button.png" class="add_post_icon">
                </br>
                <span class="buttom_tab_text">お題を作る</span>
            </a>
            <!-- アカウントボタン -->
            <a href="profile.blade.php" class="buttom_tab_account">
                <i class="fas fa-user-circle account_icon">
                    </br>
                    <span class="buttom_tab_text">アカウント</span>
                </i>
            </a>
        </div>
    </div>

</body>

</html>