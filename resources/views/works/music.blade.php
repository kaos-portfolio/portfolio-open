<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/works/music.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <title>WORKS(作品集)&nbsp;音楽専門学校サイト・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="music_header">
            <img class="music_logo" alt="音楽専門学校サイトロゴ" src="{!! asset('/img/works/music/logo.png') !!}">
            <div class="music_menu">
                <a>COURSE</a>
                <a>INTERVIEW</a>
                <a>REASON</a>
                <a>ACCESS</a>
            </div>
            <div class="header_list_wrap_sp">
                <label for="cp_toggle01" class="header_list_label_sp"><span></span></label>
            </div>
        </div>
        <div class="music_main">
            <img class="music_main_copy" alt="音楽専門学校サイトコピー" src="{!! asset('/img/works/music/main/main_copy.png') !!}">
        </div>
        <div class="music_banner_wrap">
            <a class="music_banner_document">資料請求</a>
            <a class="music_banner_contact">お問い合わせ</a>
        </div>
        <div class="music_course_wrap">
            <div class="music_title_wrap">
                <div class="music_title">
                    <span class="brackets">[</span>
                    <h2>COURSE</h2>
                    <span class="brackets">]</span>
                </div>
                <span class="font_white">コース</span>
            </div>
            <div class="music_course_card_wrap">
                @foreach($music_course as $item) 
                    <a class="music_course_card">
                        <div class="music_course_card_text">
                            <p>{!! $item['title'] !!}</p>
                            <div>MORE</div>
                        </div>
                        <img class="sp_none" alt="{!! $item['title'] !!}" src="{!! asset('/img/works/music/course/'.$item['img'].'.jpg') !!}">
                        <img class="pc_none" alt="{!! $item['title'] !!}" src="{!! asset('/img/works/music/course/'.$item['img'].'_sp.jpg') !!}">
                    </a>
                @endforeach
            </div>
        </div>
        <div class="music_title_wrap">
            <div class="music_title">
                <span class="brackets">[</span>
                <h2>INTERVIEW</h2>
                <span class="brackets">]</span>
            </div>
            <span>インタビュー</span>
        </div>
        <div class="music_interview_left1 content_center">
            <div class="music_interview_title">
                <p>優秀な仲間にもらった刺激</p>
                <span>佐々木&nbsp;舞さん</span>
                <a>MORE</a>
            </div>
            <img class="recruit_about_icon" alt="願書" src="{!! asset('/img/works/music/interview/interview1.jpg') !!}">
        </div>
        <div class="music_interview_right content_center">
            <div class="music_interview_title">
                <p>あきらめないことの大切さ</p>
                <span>鈴木&nbsp;武さん</span>
                <a>MORE</a>
            </div>
            <img class="recruit_about_icon" alt="願書" src="{!! asset('/img/works/music/interview/interview2.jpg') !!}">
        </div>
        <div class="music_interview_left2 content_center">
            <div class="music_interview_title">
                <p>小学生のときからの夢</p>
                <span>高橋&nbsp;翔さん</span>
                <a>MORE</a>
            </div>
            <img class="recruit_about_icon" alt="願書" src="{!! asset('/img/works/music/interview/interview3.jpg') !!}">
        </div>
        <div class="music_reason_wrap">
            <div class="music_title_wrap">
                <div class="music_title">
                    <span class="brackets">[</span>
                    <h2>REASON</h2>
                    <span class="brackets">]</span>
                </div>
                <span>選ばれる3つの理由</span>
            </div>
            <div class="music_reason_card_wrap content_center">
                @foreach($music_reason as $item) 
                    <a class="music_reason_card">
                        <img alt="{!! $item['title'] !!}" src="{!! asset('/img/works/music/reason/'.$item['img'].'.png') !!}">
                        <div class="music_reason">
                            <p>{!! $item['title'] !!}</p>
                            <span>{!! $item['description'] !!}</span>
                        </div>
                        <span class="music_reason_number">{!! $item['number'] !!}</span>
                    </a>
                @endforeach
            </div>
            <a class="more">MORE</a>
        </div>
        <div class="music_contact_wrap">
            <div class="music_contact">
                <span class="music_contact_description">お気軽にお問い合わせください</span>
                <a class="music_contact_tel" href="tel:0312345678">03-1234-5678</a>
            </div>
            <div class="music_contact_button">
                <a class="music_contact_button_left">資料請求</a>
                <a class="music_contact_button_right">お問い合わせ</a>
            </div>
        </div>
        <div class="music_foooter">
            <img class="music_logo" alt="音楽専門学校サイトロゴ" src="{!! asset('/img/works/music/logo.png') !!}">
            <div class="music_foooter_menu">
                <a>COURSE</a>
                <a>INTERVIEW</a>
                <a>REASON</a>
                <a>ACCESS</a>
            </div>
        </div>
        <div class="music_copyright_wrap">
            <p>Copyright ©WeMe Music school Co., Ltd. All rights reserved.</p>
        </div>
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html>