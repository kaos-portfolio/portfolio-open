<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/works/career.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/swiper.min.css') }}">
        <script type="text/javascript" src="{{ asset('/js/swiper.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <title>WORKS(作品集)&nbsp;転職サイト詳細・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="career_header_wrap">
            <div class="career_header_left">    
                <a href="{{ action('CareerSiteController@index') }}" class="career_header_img">
                    <img alt="ロゴ" src="{!! asset('/img/works/career/header_logo.png') !!}">
                </a>
                <div class="career_header_input_wrap">
                    <div class="career_header_input">
                        <input class="display_none" placeholder="職種">
                        <input class="display_none" placeholder="勤務地">
                        <input class="display_none" placeholder="雇用形態">
                        <input placeholder="フリーワード">
                    </div>
                    <a class="header_search_button" href="{{ action('CareerSiteController@result') }}">検索する</button>
                </div>
            </div>
            <a class="career_header_register display_none">会員登録</a>
        </div>
        <div class="career_detail_main_wrap swiper-container">
            <div class="swiper-wrapper">
                <img class="swiper-slide" alt="詳細画像1" src="{!! asset('/img/works/career/detail/detail1.jpg') !!}">
                <img class="swiper-slide" alt="詳細画像2" src="{!! asset('/img/works/career/detail/detail2.jpg') !!}">
                <img class="swiper-slide" alt="詳細画像3" src="{!! asset('/img/works/career/detail/detail3.jpg') !!}">    
            </div>
        </div>
        <div class="career_detail_job_wrap content_center">
            <h2 class="career_detail_title_main">エンジニア大募集★年間休日126日&土日祝休み★残業少なめ</h2>
            <div class="career_detail_category_box">
                <div class="career_detail_category_wrap">
                    <span class="career_detail_category">フロントエンドエンジニア</span>
                    <span class="career_detail_employment">正社員</span>
                </div>
                <p class="career_detail_date">掲載終了予定日： 2020/01/20</p>
            </div>
            <div class="career_detail_wrap">
                <div class="career_detail_left_wrap">
                    <div class="career_detail_company_wrap">      
                        <img alt="詳細画像3" src="{!! asset('/img/works/career/logo_list/logo_detail.png') !!}">
                        <p class="career_detail_company">株式会社ネクストドア</p>
                    </div>
                    <div class="career_detail_income_wrap">
                        <div class="career_detail_income_inner">
                            <div class="career_detail_income">
                                <p>年収</p>
                                <span>530万円</span>
                            </div>
                            <div class="career_detail_place">
                                <p>勤務地</p>
                                <span>東京都渋谷区</span>
                            </div>
                        </div>
                        <div class="career_detail_wantedly">
                            <p>急募</p>
                            <p>未経験可能</p>
                        </div>
                    </div>
                    <div class="career_detail_cotent_wrap">
                        <h3 class="career_detail_title">仕事内容</h3>
                        <p class="career_detail">今CMでも大人気のゲームタイトルのディレクターを募集です。ゲームディレクターの経験者の方、大歓迎です。業界未経験の方も、ディレクターの経験があればご応募可能です！今CMでも大人気のゲームタイトルのディレクターを募集です。ゲームディレクターの経験者の方、大歓迎です。業界未経験の方も、ディレクターの経験があればご応募可能です！<br><br>今CMでも大人気のゲームタイトルのディレクターを募集です。ゲームディレクターの経験者の方、大歓迎です。業界未経験の方も、ディレクターの経験があればご応募可能です！今CMでも大人気のゲームタイトルのディレクターを募集です。ゲームディレクターの経験者の方、大歓迎です。業界未経験の方も、ディレクターの経験があればご応募可能です！</p>
                    </div>
                    <div class="career_detail_cotent_wrap">
                        <h3 class="career_detail_title">応募資格</h3>
                        <table class="career_detail_table">
                            <tr>
                                <th>必要スキル</th>
                                <td>UI・UXにおける実務経験2年以上</td>
                            </tr>
                            <tr>
                                <th>歓迎スキル</th>
                                <td>ゲーム業界における実務経験</td>
                            </tr>
                        </table>
                    </div>
                    <div class="career_detail_cotent_wrap">
                        <h3 class="career_detail_title">募集要項</h3>
                        <table class="career_detail_table">
                            <tr>
                                <th>雇用形態</th>
                                <td>正社員</td>
                            </tr>
                            <tr>
                                <th>勤務地</th>
                                <td>東京都</td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>9：30～18：00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="career_right_wrap">
                    <div class="career_right_wrap_inner">
                        <div class="career_company_wrap">
                            <p class="career_company_job">【テストエンジニア】★年間休日126日&土日祝休み★残業少なめ</p>
                            <span class="career_company">株式会社ネクストドア</span>
                            <a class="career_company_button">応募する</a>
                        </div>
                        <div class="career_company_name">        
                            <img alt="詳細画像3" src="{!! asset('/img/works/career/logo_list/logo_detail.png') !!}">
                            <p>株式会社ネクストドア</p>
                        </div>
                        <ul class="career_company_list">
                            <li>
                                <p>設立年</p>
                                <span>1998 年 11 月</span>
                            </li>
                            <li>
                                <p>設立年</p>
                                <span>1998 年 11 月</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="recommend_wrap">
                <h3 class="career_title">
                    <p>Recommend</p>
                    <span>おすすめ求人</span>
                </h2>
                <div class="recommend_inner">    
                    @foreach($recommend as $item)
                        <div class="recommend_card">
                            <img alt="{!! $item['title'] !!}" src="{!! asset('/img/works/career/recommend/'.$item['img'].'.jpg') !!}">
                            <div class="recommend_card_right">
                                <h3 class="recommend_card_title">{!! $item['title'] !!}</h3>
                                <div class="recommend_card_category_wrap">
                                    <p class="recommend_card_category">{!! $item['label'] !!}</p>
                                    <p class="recommend_card_category_employment">{!! $item['employment'] !!}</p>
                                </div>
                                <div class="income_wrap">
                                    <p class="income_label">年収</p>
                                    <p class="income_text">{!! $item['income'] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="career_footer_wrap content_center career_detail_footer">
            <div class="career_footer_logo_wrap">
                <img src="{!! asset('/img/works/career/footer_logo.png') !!}">
                <p>デザイナー・エンジニア向けの転職サイト</p>
            </div>
            <div class="career_footer_item_wrap">
                <div class="career_footer_title">職種から探す</div>
                <div class="career_footer_item">
                    <a href="">ディレクター</a>
                    <a href="">デザイナー</a>
                    <a href="">エンジニア</a>
                </div>
            </div>
            <div class="career_footer_item_wrap">
                <div class="career_footer_title">キーワードから探す</div>
                <div class="career_footer_item">
                    <a href="">未経験歓迎</a>
                    <a href="">経験者優遇</a>
                    <a href="">自社サービスあり</a>
                    <a href="">急募</a>
                    <a href="">服装自由</a>
                </div>
            </div>
        </div>
        <div class="career_copyright">Copyright ©Design Works Co., Ltd. All rights reserved.</div>
        <script>console.log("ちゃんとスタイル適用してね。");</script>
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
            loop: true,
            centeredSlides : false,
            breakpoints: {
                // when window width is <= 480px
                480: {
                slidesPerView: 1,
                },
                // when window width is <= 640px
                640: {
                slidesPerView: 2,
                spaceBetween: 0
                }
            }
        });
        </script>
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html>  