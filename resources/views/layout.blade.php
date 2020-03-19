<!doctype html>
<html>
    <head>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-DGBXL3RLQL');
        </script>
        <!-- End User Heat Tag -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DGBXL3RLQL"></script>
        <title>@yield('title')</title>
        @yield('scss')
        <!-- User Heat Tag -->
        <script type="text/javascript">
            (function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uh3WGAfpTE'});
        </script>
    </head>
    <body>
        <div class="content_wrap">
            <div id="app">
                <header-component></header-component>
            </div>
            @yield('content')
            @include('parts.more')
            @include('parts.contact_form')
            @include('parts.footer')
            <a href="{{ action('ContactController@form') }}" class="contact_fixed_wrap move">
                <img alt="メール" src="{{ asset('/img/common/contact/mail.png') }}">
                <div class="contact_fixed">
                    <span class="text">お問い合わせ</span>
                    <span class="arrow fas fa-chevron-right"></span>
                </div>    
            </a>
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/fadein.js') }}"></script>
        <script src="{{ asset('/js/scroll.js') }}"></script>
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html>