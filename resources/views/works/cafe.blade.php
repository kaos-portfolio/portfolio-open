<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/works/cafe.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/swiper.min.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('/js/swiper.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <title>WORKS(作品集)&nbsp;カフェサイト・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="cafe_main">
            <img class="cafe_main_logo" alt="カフェロゴ" src="{!! asset('/img/works/cafe/logo_main.png') !!}">       
        </div>
        <div class="cafe_header_wrap">
            <img class="cafe_header_logo" alt="カフェヘッダーロゴ" src="{!! asset('/img/works/cafe/logo.png') !!}">  
            <div class="cafe_header_list_wrap">
                <div class="cafe_header_list">
                    <a>MENU</a>
                    <a>CONCEPT</a>
                    <a>NEWS</a>
                    <a>ACCESS</a>
                </div>
                <div class="cafe_header_tel_wrap">
                    <img alt="電話アイコン" src="{!! asset('/img/works/cafe/tel.png') !!}">  
                    <a href="tel:03-1234-5678" class="cafe_header_tel">03-1234-5678</a>
                </div>
            </div>
        </div>
        <div class="cafe_menu_wrap">
            <div class="cafe_title">
                <h2>MENU</h2>
                <span>メニュー</span>
                <span class="title_sub_border"></span>
            </div>
            <div class="cafe_menu_main_wrap content_center">
                <div class="cafe_menu_main_inner">
                    <p class="cafe_menu_main_title">フルーツたっぷりパンケーキ</p>
                    <p class="cafe_menu_main_label">いちご・みかん・キウイ</p>
                    <p class="cafe_menu_main_price">¥2,480</p>
                    <p class="cafe_menu_main_description">
                        当店の人気No.1メニューです！いちご、ブルーベリー、りんごなど、人気のフルーツがたっぷりです。一日限定50食ですので、早めにお召し上がりください。 
                    </p>
                </div>
            </div>
            <div class="cafe_menu_card_box swiper-container sp_none">
                <div class="swiper-wrapper">
                    @foreach($menu as $item) 
                        <a class="cafe_menu_card_wrap swiper-slide">
                            <img class="img_hover" alt="{!! $item['name'] !!}" src="{!! asset('/img/works/cafe/menu/'.$item['img'].'.jpg') !!}">
                            <div class="cafe_menu_card">
                                <p class="cafe_menu_card_title">{!! $item['name'] !!}</p>
                                <p class="cafe_menu_card_label">{!! $item['label'] !!}</p>
                                <p class="cafe_menu_card_price">{!! $item['price'] !!}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="cafe_menu_card_box pc_none">
                <div>
                    @foreach($menu as $item) 
                        <a class="cafe_menu_card_wrap">
                            <img class="img_hover" alt="{!! $item['name'] !!}" src="{!! asset('/img/works/cafe/menu/'.$item['img'].'.jpg') !!}">
                            <div class="cafe_menu_card">
                                <p class="cafe_menu_card_title">{!! $item['name'] !!}</p>
                                <p class="cafe_menu_card_label">{!! $item['label'] !!}</p>
                                <p class="cafe_menu_card_price">{!! $item['price'] !!}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="cafe_button_wrap">
                <a class="cafe_button">All Menu</a>
            </div>
        </div>
        <div class="cafe_concept_wrap">
            <div class="cafe_title">
                <h2>CONCEPT</h2>
                <span>コンセプト</span>
                <span class="title_sub_border"></span>
            </div>
            <div class="cafe_right content_center">
                <h3 class="cafe_concept">大都会の中にやすらぎのひとときを</h3>
                <span class="cafe_concept_description">大都会の渋谷にある隠れ家のような店内。疲れ切った心を甘いパンケーキが癒やしてくれます大都会の渋谷にある隠れ家のような店内。疲れ切った心を甘いパンケーキが癒やしてくれます。</span>
            </div>
        </div>
        <div class="cafe_news_wrap">
            <div class="cafe_title">
                <h2>NEWS</h2>
                <span>ニュース</span>
                <span class="title_sub_border"></span>
            </div>
            <div class="cafe_right cafe_news content_center">
                <div class="cafe_news_card_wrap content_center">
                    @foreach($news as $item)
                        <a class="cafe_news_card">    
                            <div class="img_hover_wrap">
                                <img class="img_hover" alt="{!! $item['title'] !!}" src="{!! asset('/img/works/cafe/news/'.$item['img'].'.jpg') !!}">
                            </div>
                            <p class="cafe_news_title">{!! $item['title'] !!}</p>
                            <p class="cafe_news_date">{!! $item['date'] !!}</p>
                        </a>
                    @endforeach
                </div>   
                <div class="cafe_button_wrap">
                    <a class="cafe_button">All News</a>
                </div>
            </div>
        </div>
        <div class="cafe_map_wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.5560554603117!2d139.71844201544553!3d35.68793178019272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ced09474d0b%3A0x33b747e3a4d9e736!2z5Zub6LC35LiJ5LiB55uu6aeF!5e0!3m2!1sja!2sjp!4v1583404686780!5m2!1sja!2sjp" allowfullscreen=""></iframe>
        </div>
        <div class="cafe_contact">
            <div class="cafe_contact_inner">
                <img class="cafe_footer_logo" alt="カフェヘッダーロゴ" src="{!! asset('/img/works/cafe/logo.png') !!}">  
                <div class="cafe_contact_information">
                    <p>東京都新宿区0-00-00</p>
                    <p>最寄り: 地下鉄丸ノ内線 四谷三丁目駅</p>
                    <p>TEL: 03-1234-5678</p>
                </div>
                <div class="cafe_footer_list">
                    <a>MENU</a>
                    <a>CONCEPT</a>
                    <a>NEWS</a>
                    <a>ACCESS</a>
                </div>
            </div>
        </div>
        <div class="cafe_copyright">
            <div class="cafe_copyright_inner">
                Copyright ©STAY CAFE Co., Ltd. All rights reserved.
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
            spaceBetween: 60,
            loop: true,
            centeredSlides : true,
            breakpoints: {
                // when window width is <= 480px
                0: {
                slidesPerView: 1,
                spaceBetween: 20,
                },
                // when window width is <= 480px
                480: {
                slidesPerView: 3,
                spaceBetween: 20,
                },
                // when window width is <= 640px
                640: {
                slidesPerView: 4,
                spaceBetween: 80,
                },
                1400: {
                slidesPerView: 7,
                spaceBetween: 80
                }
            }
        });
        </script>
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html>  