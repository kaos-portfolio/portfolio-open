<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <title>CONTACT(お問い合わせ)・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="content_wrap">
            @yield('content')
            @include('parts.footer')
        <div>
        <script src="{{ asset('/js/fadein.js') }}"></script>
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html>