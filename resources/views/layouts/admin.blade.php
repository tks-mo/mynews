<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <!--windowsの基本ブラウザであるedgeに対応するタグ-->
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <!--画面幅を小さくしたとき、スマートフォンで見たときなどに文字や画像の大きさを調整してくれるタグ-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--CSRF Token-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます --}}
        <title>@yield('title')</title>
        
        <!--Scripts-->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!--Fonts-->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!--Styles-->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです --}}
            <nav class="navbar navbar-expand-md navber-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarSupportedContent" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--Left Side Of Navbar-->
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        <!--Right Side Of Navbar-->
                        <ul class="navbar-nav ml-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
            
            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>
