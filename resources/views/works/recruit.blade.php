<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/works/recruit.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <title>WORKS(作品集)&nbsp;採用サイト・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="recruit_header">
            <img class="recruit_logo" alt="採用サイトロゴ" src="{!! asset('/img/works/recruit/logo.png') !!}">
            <div class="recruit_menu">
                <a>ACTION WAY</a>
                <a>BUSINESS</a>
                <a>RECRUIT</a>
                <a>INTERVIEW</a>
            </div>
            <a class="recruit_more" href="#">
                <span>ENTRY</span>
                <p class="fas fa-chevron-right"></p>
            </a>
            <div class="header_list_wrap_sp">
                <label for="cp_toggle01" class="header_list_label_sp"><span></span></label>
            </div>
        </div>
        <div class="recruit_main_wrap">
            <div class="recruit_main">
                <h1>求む、<span>空想力</span></h1>
                <p>空想力で現状を打破せよ。</p>
            </div>
            <div class="recruit_main_news">
                <h2>NEWS</h2>
                <div>
                    <p class="date">2020.3.1</p>
                    <p class="description">フロントエンジニアの募集を開始</p>
                </div>
            </div>
        </div>
        <div class="recruit_concept_wrap">
            <div class="recruit_concept">
                <h2>空想力は、チカラだ。</h2>
                <span>まだ見ぬ未来を想像せよ。</span>
            </div>
            <p>
                変化の激しいこの時代、既存のやりかたでは対応できないことばかりです。過去の成功事例にこだわっていては、勝つことはもちろん、生き残ることもできません。まだ誰も問いていない問題を、空想力で解いていく、そんな仲間を私達は探しています。
            </p>
        </div>
        <img class="recruit_img" alt="採用サイト社内風景" src="{!! asset('/img/works/recruit/concept/internal_img.jpg') !!}">
        <div class="recruit_about_wrap">
            <div class="recruit_title">
                <h2>ACTION WAY</h2>
                <span>アクションについて</span>
            </div>
            <div class="recruit_about_card_wrap content_center">
                @foreach($recruit_about as $item)
                    <div class="recruit_about_card">
                        <div class="recruit_about_card_inner">
                            <img class="recruit_about_icon" alt="{!! $item['label'] !!}" src="{!! asset('/img/works/recruit/about/'.$item['img'].'.png') !!}">
                            <div class="recruit_about_title_wrap">
                                <div class="recruit_about_title">
                                    <h3>{!! $item['title'] !!}</h3>
                                    <span>{!! $item['label'] !!}</span>
                                </div>
                                <span class="fas fa-chevron-right recruit_arrow"></span>
                            </div>
                        </div>
                        <p class="recruit_about_description">{!! $item['description'] !!}</p>
                    </div>
                @endforeach
            </div>
            <a class="recruit_more" href="#">
                <span>もっと見る</span>
                <p class="fas fa-chevron-right"></p>
            </a>
        </div>
        <div class="recruit_business_wrap">
            <div class="recruit_title">
                <h2>BUSINESS</h2>
                <span>事業内容</span>
            </div>
            <div class="recruit_business_card_wrap content_center">
                <a class="recruit_business_card advertising">
                    <div>
                        <p>インターネット広告事業</p>
                        <span class="fas fa-chevron-right recruit_arrow"></span>
                    </div>
                </a>
                <a class="recruit_business_card game">
                    <div>
                        <p>インターネット広告事業</p>
                        <span class="fas fa-chevron-right recruit_arrow"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="recruit_application_wrap">
            <div class="content_center">
                <a class="recruit_application_menu">
                    <h2>RECRUIT</h2>
                    <div>
                        <p>募集要項</p>
                        <span>></span>
                    </div>
                </a>
                <div class="recruit_application_card_wrap">
                    @foreach($recruit_application as $item)
                        <a class="recruit_application_card">
                            <div class="recruit_application_card_inner">
                                <p class="recruit_application_label">{!! $item['label'] !!}</p>
                                <p class="recruit_application_title">{!! $item['title'] !!}</p>
                            </div>
                            <span class="recruit_application_description">{!! $item['description'] !!}</span>
                            <span class="fas fa-chevron-right recruit_arrow"></span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="recruit_interview_wrap">
            <div class="recruit_title">
                <h2>INTERVIEW</h2>
                <span>スタッフインタビュー</span>
            </div>
            <div class="recruit_interview content_center">
                @foreach($recruit_interview as $item)
                    <a class="recruit_interview_card_wrap">
                        <img alt="$item['label']" src="{!! asset('/img/works/recruit/interview/'.$item['img'].'.jpg') !!}">
                        <div class="recruit_interview_card">
                            <span class="recruit_interview_card_label">{!! $item['label'] !!}</span>
                            <div class="recruit_interview_card_name_wrap">
                                <span class="recruit_interview_card_name">{!! $item['name'] !!}</span>
                                <span class="recruit_interview_card_name_english">{!! $item['name_english'] !!}</span>
                            </div>
                            <p class="recruit_interview_card_description">{!! $item['description'] !!}</p>
                            <div class="recruit_interview_card_department">
                                <p>{!! $item['joining'] !!}</p>
                                <span class="fas fa-chevron-right recruit_arrow"></span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <a class="recruit_more" href="#">
                <span>もっと見る</span>
                <p class="fas fa-chevron-right"></p>
            </a>
        </div>
        <div class="recruit_entry">
            <p>ENTRYはこちらから</p>
            <a class="recruit_entry_button" href="#">
                <span>ENTRY</span>
                <p class="fas fa-chevron-right"></p>
            </a>
        </div>
        <div class="recruit_footer">
            <img class="recruit_logo_footer" alt="採用サイトロゴ" src="{!! asset('/img/works/recruit/logo.png') !!}">
                <div class="recruit_footer_link_main">
                    <a href="">ACTION WAY</a>
                    <a href="">BUSINESS</a>
                    <a href="">RECRUIT</a>
                    <a href="">INTERVIEW</a>
                </div>
                <div class="recruit_footer_link">
                    <a href="">プライバシー</a>
                    <a href="">利用規約</a>
                    <a href="">お問い合わせ</a>
                </div>
            </div>
            <div class="recruit_copyright">
                <span>
                    Copyright Action Co., Ltd. All rights reserved.
                </span>
            </div>
        </div>
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html>