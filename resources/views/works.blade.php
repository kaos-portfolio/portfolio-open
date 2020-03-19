@extends('layout')

@section('title', 'WORKS(作品集)・Kaos&nbsp;ポートフォリオ')

@section('scss')
    <link rel="stylesheet" href="{{ asset('/css/works.css') }}">
@endsection

@section('content')
    @foreach($works as $key => $item)
        @if($item['img'] == $title && $title !== null)
            <div class="works_detail_wrap">
                <div class="works_detail_inner">
                    @if($title !== 'careerepo')
                        <a class="works_detail_main_img" target="_blank" href="{!! $works[$key]['link'] !!}">
                            <img class="fadein_first" alt="{!! $works[$key]['name'] !!}" src="{!! asset('/img/works/detail/'.$works[$key]['img'].'.jpg') !!}">
                        </a>
                    @else
                        <span class="works_detail_main_img">
                            <img class="fadein_first" alt="{!! $works[$key]['name'] !!}" src="{!! asset('/img/works/detail/'.$works[$key]['img'].'.jpg') !!}">
                        </span>
                    @endif
                    <div class="work_detail_title_wrap fadein_second">
                        <h3 class="work_detail_title">{{$works[$key]['name']}}</h3>
                        @if($title !== 'careerepo')
                            <a class="work_detail_more link_bg_yellow" target="_blank" href="{!! $works[$key]['link'] !!}">
                                @if($title == 'mg') 
                                    <span class="text_mg">システムの紹介ページを見る </span>
                                @else
                                    <span class="text">サイトを見る</span>
                                @endif
                                <span class="arrow fas fa-chevron-right"></span>
                            </a>
                        @endif
                    </div>
                    <div class="works_detail_text fadein_second">
                        {!! $works[$key]['description']!!}
                    </div>
                    <div class="works_detail_box">
                        <div class="works_detail_left">
                            <div class="works_detail fadein">
                                <p class="white_label label_bg_pink">カテゴリ</span>
                                <div class="fadein">
                                    <p class="works_detail_subtitle">#カテゴリ</span>
                                    <p class="works_detail_description">{{$works[$key]['category']}}</span>
                                </div>
                                @isset($works[$key]['period'])
                                    <div class="fadein">
                                        <p class="works_detail_subtitle">#制作期間(スマホ対応を含む)</span>
                                        <p class="works_detail_description">{!! $works[$key]['period'] !!}</span>
                                    </div>
                                @endif
                                <div class="fadein">
                                    <p class="works_detail_subtitle">#制作時期</span>
                                    <p class="works_detail_description">{{$works[$key]['when']}}</span>
                                </div>
                                <div class="fadein">
                                    <p class="works_detail_subtitle">#使用ツール</span>
                                    <p class="works_detail_description">{{$works[$key]['tool']}}</span>
                                </div>
                            </div>
                            <div class="works_detail fadein">
                                <p class="white_label label_bg_yellow">制作意図</span>
                                <div class="fadein">
                                    <p class="works_detail_subtitle">#ターゲット</span>
                                    <p class="works_detail_description">{!! nl2br($works[$key]['target']) !!}</span>
                                </div>
                                <div class="fadein">
                                    <p class="works_detail_subtitle">#目的</span>
                                    <p class="works_detail_description">{!! nl2br($works[$key]['purpose']) !!}</span>
                                </div>
                                <div class="fadein">
                                    <p class="works_detail_subtitle">#手段</span>
                                    <p class="works_detail_description">{!! nl2br($works[$key]['means']) !!}</span>
                                </div>
                                @isset($works[$key]['result'])
                                    <div class="fadein">
                                        <p class="works_detail_subtitle">#結果</span>
                                        <p class="works_detail_description">{!! nl2br($works[$key]['result']) !!}</span>
                                    </div>
                                @endif
                                @isset($works[$key]['logo'])
                                    <div class="fadein">
                                        <p class="works_detail_subtitle">#ロゴ</span>
                                        <p class="works_detail_description">{!! nl2br($works[$key]['logo']) !!}</span>
                                    </div>
                                @endif
                            </div>
                            @isset($works[$key]['quote'])
                                <div class="works_detail fadein">
                                    <p class="white_label label_bg_blue">画像引用元</span>
                                    <div>
                                        <p class="works_detail_subtitle">#引用元</span>
                                        <p class="works_detail_description">{!! nl2br($works[$key]['quote']) !!}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="works_detail_right fadein">
                            @if($title !== 'mg')
                                <p class="">\ スマホ対応もしています！ /</p>
                            @endif
                            @if($title == 'careerepo')
                                <span class="works_detail_img_link">
                                    <img alt="WORKS背景" src="{!! asset('/img/works/detail/screenshot/'.$works[$key]['img'].'.jpg') !!}">
                                </span>
                            @else
                                <a class="works_detail_img_link" target="_blank" href="{!! $works[$key]['link'] !!}">
                                    <img alt="WORKS背景" src="{!! asset('/img/works/detail/screenshot/'.$works[$key]['img'].'.jpg') !!}">
                                </a>
                                <a class="work_detail_more link_bg_yellow" target="_blank" href="{!! $works[$key]['link'] !!}">
                                    @if($title == 'mg') 
                                        <span class="text_mg">システムの紹介ページを見る </span>
                                    @else
                                        <span class="text">サイトを見る</span>
                                    @endif
                                    <span class="arrow fas fa-chevron-right"></span>
                                </a>
                            @endif
                        </div>    
                    </div>
                    @if($title !== 'careerepo')
                        <a class="work_detail_more_big link_bg_yellow fadein" target="_blank" href="{!! $works[$key]['link'] !!}">
                            @if($title == 'mg') 
                                <span class="text_mg">システムの紹介ページを見る </span>
                            @else
                                <span class="text">サイトを見る</span>
                            @endif
                            <span class="arrow fas fa-chevron-right"></span>
                        </a>
                    @endif
                </div>
            </div>
        @endif
    @endforeach

    <div class="works_title_wrap @isset($title) fadein @else fadein_first @endisset">
        @include('parts.title',
            [
                'title' => 'WORKS',
                'img' => 'works',
                'sub_title' => '作品集',
                'description' => '
                    架空サイトと、制作実績になります
                ',
            ]
        )
        <img class="works_title_bg" alt="WORKS背景" src="{!! asset('/img/works/works_title_bg.png') !!}">
    </div>

    <div class="works_list_wrap_detail">
        <div class="works_list_inner">
            @foreach($works as $item)
                <div class="works_list @isset($title) fadein @else fadein_second @endisset">
                    <a class="works_list_img_wrap" href="{{ action('WorksController@index') }}?title={!!$item['img']!!}">
                        <img alt="{!! $item['name'] !!}" src="{!! asset('/img/top/works/'.$item['img'].'.jpg') !!}">
                    </a>
                    <a class="link_line_wrap link_bg_white" href="{{ action('WorksController@index') }}?title={!!$item['img']!!}">
                        <span class="link_line">{{$item['name']}}</span>
                        <span class="arrow fas fa-chevron-right"></span>
                    </a>
                    <div class="works_tag">
                        <p>#{{ $item['when'] }}</p>
                        <p>#{{ $item['category'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection