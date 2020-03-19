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
        <title>WORKS(作品集)&nbsp;転職サイト一覧・Kaos&nbsp;ポートフォリオ</title>
    </head>
    <body>
        <div class="career_header_wrap">
            <div class="career_header_left">   
                <a href="{{ action('CareerSiteController@index') }}">
                    <img alt="ニュース" src="{!! asset('/img/works/career/header_logo.png') !!}">
                </a> 
                <div class="career_header_input_wrap">
                    <div class="career_header_input">
                        <input class="display_none" placeholder="職種">
                        <input class="display_none" placeholder="勤務地">
                        <input class="display_none" placeholder="雇用形態">
                        <input placeholder="フリーワード">
                    </div>
                    <a class="header_search_button" href="{{ action('CareerSiteController@result') }}">検索する</a>
                </div>
            </div>
            <a class="career_header_register display_none">会員登録</a>
        </div>
        <div class="career_result_wrap content_center">
            <div class="career_search_box display_none">
                <h2 class="career_search_title">検索条件変更</h2>
                <div class="career_search">
                    <p>職種</p>
                    <input placeholder="職種を選択">
                </div>
                <div class="career_search">
                    <p>勤務地</p>
                    <input placeholder="勤務地を選択">
                </div>
                <div class="career_search">
                    <p>雇用形態</p>
                    <input placeholder="雇用形態を選択">
                </div>
                <div class="career_search">
                    <p>フリーワード</p>
                    <input placeholder="フリーワードを入力">
                </div>
                <a class="career_search_link">詳細検索</a>
                <a class="career_search_button" href="{{ action('CareerSiteController@result') }}">検索する</a>
            </div>
            <div class="career_result_right">
                @foreach($result as $item) 
                    <div class="career_card">
                        <h3>{!! $item['title'] !!}</h3>
                        <div class="career_card_category_wrap">
                            <div>
                                <span class="career_card_category">{!! $item['category'] !!}</span>
                                <span class="career_card_employment">{!! $item['employment'] !!}</span>
                            </div>
                            <span class="career_card_company">{!! $item['company'] !!}</span>
                        </div>
                        <div class="career_card_inner">
                            <img alt="{!! $item['img'] !!}" src="{!! asset('/img/works/career/list/'.$item['img'].'.jpg') !!}">
                            <div class="career_card_right">
                                <div class="career_card_income_wrap">
                                    <div class="career_card_income">
                                        <p>年収</p>
                                        <span>{!! $item['income'] !!}</span>
                                    </div>
                                    <div class="career_card_place">
                                        <p>勤務地</p>
                                        <span>{!! $item['place'] !!}</span>
                                    </div>
                                </div>
                                <div class="career_card_label_wrap">
                                    <span>{!! $item['label1'] !!}</span>
                                    <span>{!! $item['label2'] !!}</span>
                                </div>
                                <div class="career_card_description">
                                    {!! $item['description'] !!}
                                </div>
                                <div class="career_card_button_wrap">
                                    <a class="career_card_button_detail" href="{{ action('CareerSiteController@detail') }}">詳細を見る</a>
                                    <a class="career_card_button_entry">応募する</a>
                                </div>
                                <div class="career_card_date_wrap">
                                    <span>掲載終了予定： {!! $item['date1'] !!}</span>
                                    <span>情報更新： {!! $item['date2'] !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="career_footer_wrap content_center career_result_footer">
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