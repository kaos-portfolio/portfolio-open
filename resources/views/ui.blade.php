@extends('layout')

@section('title', 'UIUX(現職の経験)・Kaos&nbsp;ポートフォリオ')

@section('scss')
    <link rel="stylesheet" href="{{ asset('/css/ui.css') }}">
@endsection

@section('content')
    <div class="ui_title_wrap fadein_first">
        @include('parts.title',
            [
                'title' => 'UI UX',
                'img' => 'ui',
                'sub_title' => '現職の経験',
                'description' => '
                    現職で行ったシステムリニューアルの詳細になります
                ',
            ]
        )
        <img class="ui_title_bg" alt="UI背景" src="{!! asset('/img/ui/ui_title_bg.png') !!}">
    </div>
    <div class="ui_detail_wrap">
        <div class="ui_detail_inner fadein_second">            
            <div class="ui_detail_introduction_wrap">
                <h3>現職で人材紹介会社様向けのシステムリニューアルを行いました。<br>UIの良さが理由で製品の受注が増えました。</h3>
                <p class=""></p>
                <div class="ui_detail_introduction">
                    <div>
                        <span class="white_label">リニューアル前</span>
                        <span>画面遷移が多く使いにくい</span>
                    </div>
                    <p class="ui_detail_arrow sp_none fas fa-arrow-right"></p>
                    <p class="ui_detail_arrow_sp pc_none fas fa-arrow-down"></p>
                    <div class="ui_detail_introduction_right_wrap">
                        <span class="white_label">リニューアル後</span>
                        <div class="ui_detail_introduction_right">
                            <p>1年半で50社様にご導入いただく</p>
                            <span>(UIの良さが理由での導入理由が7〜8割になる)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="premise" class="ui_title_wrap fadein">
                <h3>
                    <span class="title_small">\システムリニューアル時の</span>
                    <span class="title_big">前提</span>
                    <span class="title_small">/</span>
                </h3>
                <p>どんなシステムで、なぜリニューアルが必要だったかの理由になります</p>
            </div>
            <div class="ui_detail fadein">
                @foreach($premise as $item)
                    <div class="circumstance_wrap fadein">
                        <div class="circumstance_left">
                            <span class="yellow_label">{{ $item['label'] }}</span>
                            <h4>{!!  $item['title'] !!}</h4>
                            <p>{!! $item['description'] !!}</p>
                        </div>   
                        <div class="circumstance_img_wrap">
                            <div class="circumstance_img_inner">
                                <img alt="{!! $item['title'] !!}" src="{!! asset('/img/ui/premise/'.$item['img'].'.png') !!}">
                            </div>
                        </div>  
                    </div>
                @endforeach
                <img class="clip" alt="青色クリップ" src="{!! asset('/img/common/item/blue_clip.png') !!}">
            </div>
            <div id="circumstance" class="ui_title_wrap fadein">
                <h3>
                    <span class="title_small">\システムリニューアル時の</span>
                    <span class="title_big">環境</span>
                    <span class="title_small">/</span>
                </h3>
                <p>どんな環境で、デザインタスクをどのように進めたかになります</p>
            </div>
            <div class="ui_detail fadein">
                @foreach($circumstance as $item)
                    <div class="premise_wrap fadein">
                        <div class="premise_img_wrap">
                            <div class="premise_img_inner">
                                <img alt="{!! $item['title'] !!}" src="{!! asset('/img/ui/circumstance/'.$item['img'].'.png') !!}">
                            </div>
                        </div>
                        <div class="premise_right">
                            <span class="yellow_label">{{ $item['label'] }}</span>
                            <h4>{{ $item['title'] }}</h4>
                            <p>{!! $item['description'] !!}</p>
                        </div>
                    </div>
                @endforeach
                <img class="clip" alt="ピンククリップ" src="{!! asset('/img/common/item/pink_clip.png') !!}">
            </div>
            <div id="example" class="ui_title_wrap fadein">
                <h3>
                    <span class="title_small">\システムリニューアル時に</span>
                    <span class="title_big">やったこと</span>
                    <span class="title_small">/</span>
                </h3>
                <p>UIを向上させるために、リニューアル時に行った変更例の一部になります</p>
            </div>
            <div class="ui_detail fadein">
                @foreach($example as $item)
                    <div class="example_wrap fadein">
                        <div class="example_title">
                            <span class="yellow_label">{{ $item['label'] }}</span>
                            <h4>{{ $item['title'] }}</h4>
                        </div>  
                        <div class="example_img_wrap">               
                            <div class="example_img">
                                <img alt="{!! $item['title'] !!}" src="{!! asset('/img/ui/example/before/'.$item['img'].'.png') !!}">
                                <p class="example_before">{!! $item['description_before'] !!}</p>
                            </div> 
                            <div class="example_img_center">
                                <img alt="{!! $item['title'] !!}" src="{!! asset('/img/ui/example/arrow.png') !!}">
                            </div>
                            <div class="example_img">
                                <img alt="{!! $item['title'] !!}" src="{!! asset('/img/ui/example/after/'.$item['img'].'.png') !!}">
                                <p>{!! $item['description_after'] !!}</p>
                            </div> 
                        </div>
                    </div>
                @endforeach
                <img class="clip" alt="青色クリップ" src="{!! asset('/img/common/item/blue_clip.png') !!}">
            </div>
        </div>
    </div> 
@endsection