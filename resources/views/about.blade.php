@extends('layout')

@section('title', 'ABOUT(サイトについて)・Kaos&nbsp;ポートフォリオ')

@section('scss')
    <link rel="stylesheet" href="{{ asset('/css/concept.css') }}">
@endsection

@section('content')
    <div class="concept_title_wrap fadein_first">
        @include('parts.title',
            [
                'title' => 'ABOUT',
                'img' => 'concept',
                'sub_title' => 'サイトについて',
                'description' => '
                    このサイトを作るときに意識したことになります
                ',
            ]
        )
        <img class="concept_title_img" alt="タイトルの背景" src="{!! asset('/img/concept/concept_title_bg.png') !!}">
    </div>

    <div class="concept_wrap">
        <div class="concept_inner">
            <div id="job_change" class="concept_unchorlink"></div>
            <div class="concept_list_wrap fadein_second">
                <div class="concept_title">
                    <h3>「転職」のポートフォリオであることを意識</h3>
                    <img class="main_img main_img_first" alt="転職のポートフォリオ" src="{!! asset('/img/concept/big/job_change.png') !!}">
                </div>
                @foreach($job_change as $item)
                    <div class="concept_list">
                        <div class="concept_list_how_wrap">
                            <p class="yellow_label">HOW</p>
                            <p class="concept_list_how">{!! $item['how'] !!}</p>
                        </div>
                        <div>
                            <p class="blue_label">WHY</p>
                            <p class="concept_list_why">{!! $item['why'] !!}</p>
                        </div>
                    </div>
                @endforeach
                <img class="clip" alt="青色クリップ" src="{!! asset('/img/common/item/blue_clip.png') !!}">
            </div>
            <div id="conductor" class="concept_unchorlink"></div>
            <div class="concept_list_wrap fadein">
                <div class="concept_title">
                    <h3>他コンテンツへの導線がわかりやすいこと</h3>
                    <img class="main_img conductor_img" alt="転職のポートフォリオ" src="{!! asset('/img/concept/big/conductor.png') !!}">
                </div>
                @foreach($conductor as $item)
                    <div class="concept_list">
                        <div class="concept_list_how_wrap">
                            <p class="yellow_label">HOW</p>
                            <p class="concept_list_how">{!! $item['how'] !!}</p>
                        </div>
                        <div>
                            <p class="blue_label">WHY</p>
                            <p class="concept_list_why">{!! $item['why'] !!}</p>
                        </div>
                    </div>
                @endforeach
                <img class="main_bg_img" alt="転職のポートフォリオ" src="{!! asset('/img/concept/concept_list_bg.png') !!}">
                <img class="clip"  alt="青色クリップ" src="{!! asset('/img/common/item/yellow_clip.png') !!}">
            </div>
            <div id="stand_out" class="concept_unchorlink"></div>
            <div class="concept_list_wrap_last fadein">
                <div class="concept_title">
                    <h3>数多くの応募の中から目立つこと</h3>
                    <img class="main_img main_img_last" alt="転職のポートフォリオ" src="{!! asset('/img/concept/big/stand_out.png') !!}">
                </div>
                @foreach($stand_out as $item)
                    <div class="concept_list">
                        <div class="concept_list_how_wrap">
                            <p class="yellow_label">HOW</p>
                            <p class="concept_list_how">{!! $item['how'] !!}</p>
                        </div>
                        <div>
                            <p class="blue_label">WHY</p>
                            <p class="concept_list_why">{!! $item['why'] !!}</p>
                        </div>
                    </div>
                @endforeach                        
                <img class="main_bg_img" alt="転職のポートフォリオ" src="{!! asset('/img/concept/concept_list_bg.png') !!}">
                <img class="clip" alt="青色クリップ" src="{!! asset('/img/common/item/blue_clip.png') !!}">
            </div>
        </div>
    </div>
@endsection