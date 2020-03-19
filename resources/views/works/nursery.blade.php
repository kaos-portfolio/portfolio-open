<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/works/nursery.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/swiper.min.css') }}">
        <script type="text/javascript" src="{{ asset('/js/swiper.min.js') }}"></script>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <title>WORKS(作品集)&nbsp;保育園サイト・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="nursery_header_wrap">
            <img class="nursery_header_logo" alt="保育園ロゴ" src="{!! asset('/img/works/nursery/logo.png') !!}">
            <div class="nursery_header_menu">
                <a>お知らせ</a>
                <p>・</p>
                <a>入園案内</a>
                <p>・</p>
                <a>クラス紹介</a>
                <p>・</p>
                <a>アクセス</a>
                <p>・</p>
                <a>想い</a>
            </div>
            <a href="" class="nursery_contact_button">
                お問い合わせ
                <span class="arrow fas fa-chevron-right"></span>
            </a>
            <div class="header_list_wrap_sp">
                <label for="cp_toggle01" class="header_list_label_sp"><span></span></label>
            </div>
        </div>
        <div class="nursery_main_wrap">
            <div class="swiper-container nursery_main">
                <div class="swiper-wrapper">
                <div class="swiper-slide"><img style="width: 100%;" alt="メイン画像1" src="{!! asset('/img/works/nursery/main/main1.jpg') !!}"></div>
                <div class="swiper-slide"><img style="width: 100%;" alt="メイン画像2" src="{!! asset('/img/works/nursery/main/main2.jpg') !!}"></div>
                <div class="swiper-slide"><img style="width: 100%;" alt="メイン画像3" src="{!! asset('/img/works/nursery/main/main3.jpg') !!}"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <img class="bird1" alt="鳥1" src="{!! asset('/img/works/nursery/bird.png') !!}">
            <img class="hedgehog" alt="ハリネズミ" src="{!! asset('/img/works/nursery/hedgehog.png') !!}">
        </div>
        <div class="nursery_news_wrap">
            <img class="title_img" alt="ニュース" src="{!! asset('/img/works/nursery/title/news.png') !!}">
            <div class="nursery_inner">
                <img class="hills_img" alt="丘" src="{!! asset('/img/works/nursery/hills_bg.png') !!}"> 
                <div class="nursery_news_card_box content_center">   
                    @foreach($news as $item) 
                        <a class="nursery_news_card_wrap">   
                            <img alt="{!! $item['title'] !!}" src="{!! asset('/img/works/nursery/news/'.$item['img'].'.jpg') !!}">
                            <div class="nursery_news_card">
                                <span class="nursery_news_card_title">{!! $item['title'] !!}</span>
                                <span class="arrow fas fa-chevron-right"></span>
                                <p class="nursery_news_card_label">{!! $item['label'] !!}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a class="nursery_news_button">
                    <span class="text">全てのお知らせを見る</span>
                    <span class="arrow fas fa-chevron-right"></span>
                </a>
                <img class="bird2" alt="鳥" src="{!! asset('/img/works/nursery/bird.png') !!}">
            </div>
        </div>
        <div class="nursery_about_wrap">
            <div class="nursery_inner">
                <img class="title_img" alt="各種案内" src="{!! asset('/img/works/nursery/title/information.png') !!}">
                <div class="nursery_about_card_wrap">
                    <a class="nursery_about_card">
                        <h3>入園案内</h3>
                        <div class="admission">
                            <div class="arrow fas fa-chevron-right"></div>
                        </div>
                    </a>
                    <a class="nursery_about_card">
                        <h3>クラス紹介</h3>
                        <div class="class">
                            <div class="arrow fas fa-chevron-right"></div>
                        </div>
                    </a>
                    <a class="nursery_about_card">
                        <h3>アクセス</h3>
                        <div class="access">
                            <div class="arrow fas fa-chevron-right"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <img class="wave_img" alt="保育園ロゴ" src="{!! asset('/img/works/nursery/wave_bg.jpg') !!}">
        <div class="nursery_concept_wrap">
            <div class="nursery_inner">
                <img class="title_img" alt="各種案内" src="{!! asset('/img/works/nursery/title/philosophy.png') !!}">
                <div class="nursery_concept">
                    <p>笑顔が、こどもたちの未来をつくる。</p>
                    <span>こどもたちの笑顔ほどかけがえのないものはありません。こども保育園では<br>毎日子どもたちの笑顔で溢れています。大切なのはいうまでもないこと。</span>
                </div>
                <div class="nursery_footer_wrap">
                    <img class="nursery_footer_logo" alt="保育園ロゴ" src="{!! asset('/img/works/nursery/logo.png') !!}">
                    <div class="nursery_footer_menu">
                        <a>お知らせ</a>
                        <p>・</p>
                        <a>入園案内</a>
                        <p>・</p>
                        <a>クラス紹介</a>
                        <p>・</p>
                        <a>アクセス</a>
                        <p>・</p>
                        <a>想い</a>
                    </div>
                    <p class="nursery_copyright">Copyright ©Kodomo Hoikuen All rights reserved.</p>
                </div>
            </div>
        </div>

        <script>
        if (!String.prototype.startsWith) {
            String.prototype.startsWith = function(searchString, position) {
                position = position || 0;
                return this.indexOf(searchString, position) === position;
            };
        }
        
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },      
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            spaceBetween: 20,
            slidesPerView: 2,
            loop: true,
            centeredSlides : true,
            breakpoints: {
                // when window width is <= 480px
                0: {
                slidesPerView: 1,
                spaceBetween: 0
                },
                // when window width is <= 640px
                599: {
                slidesPerView: 2,
                spaceBetween: 16
                }
            }
        });
        </script>
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html> 