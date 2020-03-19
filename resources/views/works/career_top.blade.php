<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/works/career.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        <script type="text/javascript" src="{{ asset('/js/swiper.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <title>WORKS(作品集)&nbsp;転職サイト・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="career_main_wrap">
            <div class="career_main_img_wrap">
                <img class="career_main_logo" src="{!! asset('/img/works/career/top_logo.png') !!}">
                <p class="career_main_description">デザイナー・エンジニア向けの転職サイト</p>
            </div>
            <img class="career_main_logo_bg sp_none" src="{!! asset('/img/works/career/top_logo.png') !!}">
            <img class="career_main_logo_bg pc_none" src="{!! asset('/img/works/career/top_logo_sp.png') !!}">
            <div class="career_main_search_wrap">
                <p>デザイナー・エンジニア求人をさがす</p>
                <div class="career_main_search">
                    <div class="career_main_search_input">
                        <input placeholder="職種">
                        <input placeholder="勤務地">
                        <input placeholder="雇用形態">
                        <input placeholder="フリーワード">
                    </div>
                    <a class="career_main_search_button" href="{{ action('CareerSiteController@result') }}">検索する</a>
                </div>
            </div>
        </div>
        <div class="career_top_wrap content_center">
            <div class="career_top_left">
                <div class="career_logo_wrap">
                    <div class="career_logo_inner">
                        <img class="career_main_logo" src="{!! asset('/img/works/career/logo_list/logo1.png') !!}">
                        <img class="career_main_logo" src="{!! asset('/img/works/career/logo_list/logo2.png') !!}">
                        <img class="career_main_logo" src="{!! asset('/img/works/career/logo_list/logo3.png') !!}">
                        <img class="career_main_logo" src="{!! asset('/img/works/career/logo_list/logo4.png') !!}">
                        <img class="career_main_logo" src="{!! asset('/img/works/career/logo_list/logo5.png') !!}">
                    </div>
                </div>
                <div class="career_new_wrap">
                    <h2 class="career_title">
                        <p>New Job</p>
                        <span>新着求人</span>
                    </h2>
                    <div class="career_new"> 
                        @foreach($new as $item) 
                            <a class="career_new_card_wrap" href="{{ action('CareerSiteController@detail') }}">
                                <img alt="{!! $item['label'] !!}" src="{!! asset('/img/works/career/new/'.$item['img'].'.jpg') !!}">
                                <div class="career_new_card">
                                    <h3>{!! $item['title'] !!}</h3>
                                    <div class="career_new_label">
                                        <p>{!! $item['label'] !!}</p>
                                        <span>{!! $item['employment'] !!}</span>
                                    </div>
                                    <div class="career_new_income">
                                        <p>年収</p>
                                        <span>{!! $item['income'] !!}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="career_category_wrap">
                    <h2 class="career_title">
                        <p>Category</p>
                        <span>新着求人</span>
                    </h2>
                    <div class="career_category_card_wrap">
                        @foreach($category as $item) 
                            <a class="career_category_card" href="{{ action('CareerSiteController@result') }}">
                                <div class="career_category_title">     
                                    <img alt="{!! $item['title'] !!}" src="{!! asset('/img/works/career/category/'.$item['img'].'.png') !!}">
                                    <span>{!! $item['title'] !!}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="career_interview">
                    <h2 class="career_title">
                        <p>Interview</p>
                        <span>インタビュー</span>
                    </h2>     
                    <div class="career_interview_card_wrap">
                        @foreach($interview as $item)
                            <a class="career_interview_card"> 
                                <img alt="{!! $item['title'] !!}" src="{!! asset('/img/works/career/interview/'.$item['img'].'.jpg') !!}">
                                <div class="career_interview_card_inner">
                                    <div class="career_interview_title_wrap">
                                        <div class="career_interview_title">{!! $item['title'] !!}</div>
                                    </div>
                                    <span class="career_interview_label">
                                        {!! $item['label'] !!}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="career_top_right">
                <img alt="急募求人バナー" class="career_main_logo" src="{!! asset('/img/works/career/banner/wanted.jpg') !!}">
                <img alt="ゲーム求人バナー" class="career_main_logo" src="{!! asset('/img/works/career/banner/game.jpg') !!}">
                <img alt="第二新卒バナー" class="career_main_logo" src="{!! asset('/img/works/career/banner/new_graduate.jpg') !!}">
            </div>
        </div>
        <div class="career_footer_wrap content_center">
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
        <script src="{{ asset('/js/viewport.js') }}"></script>
    </body>
</html>  