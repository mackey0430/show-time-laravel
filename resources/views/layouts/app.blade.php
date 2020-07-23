<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- ヘッダー -->
    <div class="header_container">
    <img src= "{{ asset('image/showtime_logo.png') }}" class="header_logo">
    </div>
        
    <!-- ヘッダー用の空白 -->
    <div class="header_margin"></div>

   @yield('content')

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
            <a href="{{ url('/post/create') }}" class="buttom_tab_button">
                <img src="{{asset('/image/Buttom_tab_post_create_button.png')}}" class="add_post_icon">
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
