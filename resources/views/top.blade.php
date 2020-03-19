@extends('layout')
@section('title', 'Kaos&nbsp;ポートフォリオ')
@section('scss')
    <link rel="stylesheet" href="{{ asset('/css/top.css') }}">
@endsection
@section('content')
    <div class="main_visual_wrap">
        <img class="main_visual sp_none" alt="メイン画像" src="{{ asset('/img/top/main.gif') }}">
        <img class="main_visual pc_none" alt="メイン画像" src="{{ asset('/img/top/main_sp.gif') }}">
        <img class="main_visual_sub fadein_second sp_none" alt="メイン画像補足" src="{{ asset('/img/top/top_description.png') }}">
        <img class="main_visual_sub fadein_second pc_none" alt="メイン画像補足" src="{{ asset('/img/top/top_description_sp.png') }}">
    </div>

    <div class="reason_wrap">
        <div class="reason_inner fadein_second">
            <h2 class="fadein_second">なぜ、転職を考えるのですか?</h2>
            <div class="reason fadein_second">
                <img class="answer fadein_second" alt="回答アイコン" src="{{ asset('/img/top/answer.png') }}">
                <p>入社時に目標としていたデザインリニューアルが成功したため、よりお客様や会社へ出せる付加価値を高めるために、
                    組織としてデザインに力を入れている部署や会社で働くことを希望しております。
                </p>
            </div>
            <img class="reason_circle" alt="回答背景" src="{{ asset('/img/top/answer_bg.png') }}">
        </div>
    </div>

    <div class="works_title_top_wrap fadein">
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

    <div class="works_list_wrap">
        <div class="works_list_inner">
            @foreach($works as $item)
                <div class="works_list fadein">
                    <a class="works_list_img_wrap" href="{{ action('WorksController@index') }}?title={!!$item['img']!!}">
                        <img alt="{!! $item['title'] !!}" src="{!! asset('/img/top/works/'.$item['img'].'.jpg') !!}">
                    </a>
                    <a class="link_line_wrap link_bg_white" href="{{ action('WorksController@index') }}?title={!!$item['img']!!}">
                        <span class="link_line">{{$item['title']}}</span>     
                        <span class="arrow fas fa-chevron-right"></span>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="btn_wrap fadein">
            <a class="blue_btn" href="{{ action('WorksController@index') }}">
                <span class="text_works">すべての作品を見る</span>
                <span class="arrow fas fa-chevron-right"></span>
            </a>
        </div>
    </div>

    <div class="skills_box">
        <div class="skills_inner_wrap">
            <div class="skills_inner fadein">
                <div class="fadein">
                    @include('parts.title',
                        [
                            'title' => 'SKILLS',
                            'img' => 'skills',
                            'sub_title' => 'できること',
                            'description' => '
                                デザイン、プログラミング、イラスト制作などができます
                            ',
                        ]
                    )
                </div>
                <div class="skills_wrap fadein">
                    @foreach($skills as $item)
                        <a href="{{ action('SkillsController@index') }}#{!!$item['img']!!}" class="skills fadein">
                            <div class="skills_img_wrap">
                                <img class="skills_img" alt="{!! $item['title'] !!}" src="{!! asset('/img/skills/small/'.$item['img'].'.png') !!}">
                            </div>
                            <div class="skill_link">
                                <span class="skill_link_title">{{$item['title']}}</span>           
                                <span class="arrow fas fa-chevron-right"></span>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="btn_wrap fadein">
                    <a class="yellow_btn" href="{{ action('SkillsController@index') }}">
                        <span>すべてのできることを見る</span>
                        <span class="arrow fas fa-chevron-right"></span>
                    </a>
                </div>
                <img class="blue_clip" alt="青クリップ" src="{!! asset('/img/common/item/blue_clip.png') !!}">
            </div>
        </div>
    </div>

    <div class="profile_wrap fadein">
        <div class="profile_title_top_wrap fadein">
            @include('parts.title',
                [
                    'title' => 'PROFOLE',
                    'img' => 'profile',
                    'sub_title' => '自己紹介',
                    'description' => '
                        経歴や、経験などを年表にまとめました
                    ',
                ]
            )
            <img class="profile_title_bg" alt="PROFILE背景" src="{!! asset('/img/profile/profile_title_bg.png') !!}">
        </div>
        <img class="fadein sp_none" alt="{!! $item['title'] !!}" src="{!! asset('/img/profile/profile.gif') !!}">
        <img class="fadein pc_none" alt="{!! $item['title'] !!}" src="{!! asset('/img/profile/profile_sp.gif') !!}">
        <div class="btn_wrap fadein">
            <a class="blue_btn" href="{{ action('ProfileController@index') }}">
                <span class="text_profile">経歴を見る</span>   
                <span class="arrow fas fa-chevron-right"></span>
            </a>
        </div>
    </div>

    <div class="ui_wrap">
        <div class="ui_inner">
            <div class="ui_title_top_wrap fadein">
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
                <img class="ui_title_bg fadein" alt="UI背景" src="{!! asset('/img/ui/ui_title_bg.png') !!}">
            </div>
            <div class="ui_list_wrap fadein">
                <div class="ui_list_inner">
                    @foreach($ui as $item)
                        <div class="ui_list fadein">
                            <div class="ui_list_img">
                                <img alt="{!! $item['title'] !!}" src="{!! asset('/img/ui/top/'.$item['img'].'.png') !!}">
                                <span class="circle_back"></span>
                            </div>
                            <div class="ui_list_right">
                                <p class="yellow_label">{{$item['label']}}</p>
                                <h3>{{$item['title']}}</h3>
                                <p>{{$item['sub_title']}}</p>
                                <a class="ui_link_wrap link_bg_yellow" href="{{ action('UiController@index') }}#{!!$item['img']!!}">
                                    <span class="ui_link">もっと見る</span>
                                    <span class="arrow fas fa-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn_wrap fadein">
                    <a class="blue_btn" href="{{ action('UiController@index') }}">
                        <span class="text">現職の経験を見る</span>
                        <span class="arrow fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>
            <img class="blue_clip fadein" alt="青クリップ" src="{!! asset('/img/common/item/blue_clip.png') !!}">
        </div>
    </div>

    <div class="story_title_top_wrap fadein">
        @include('parts.title',
            [
                'title' => 'STORY',
                'img' => 'story',
                'sub_title' => 'デザイナーの道',
                'description' => '
                    独学でWebデザイナーを目指してからと、現職までのまとめになります
                ',
            ]
        )
        <img class="story_title_bg" alt="STORY背景" src="{!! asset('/img/story/story_title_bg.png') !!}">
    </div>

    <div class="story_wrap">
        <div class="story_list fadein">
            @foreach($stories as $item)
                <a class="story_item" href="{{ action('StoryController@index') }}?id={!!$item['img']!!}">
                    <img alt="{!! $item['title'] !!}" src="{!! asset('/img/story/small/'.$item['img'].'.png') !!}">
                    <div class="story_item_right">
                        <p>{{ $item['title'] }}</p>
                        <span class="arrow fas fa-chevron-right"></span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="concept_wrap">
        <div class="concept_inner">
            <div class="concept_title_top_wrap fadein">
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
                <img class="concept_title_img fadein" alt="タイトルの背景" src="{!! asset('/img/concept/concept_title_bg.png') !!}">
            </div>

            <div class="concept_list fadein">
                @foreach($about as $item)
                <a class="concept_item fadein" href="{{ action('AboutController@index') }}#{!!$item['img']!!}">
                    <img alt="{!! $item['title'] !!}" src="{!! asset('/img/concept/small/'.$item['img'].'.png') !!}">
                    <p>
                        <span>{!! nl2br(e($item['title'])) !!}</span>
                        <span class="arrow fas fa-chevron-right"></span>
                    </p>
                </a>
                @endforeach
            </div>
            <div class="btn_wrap fadein">
                <a class="blue_btn" href="{{ action('AboutController@index') }}">
                    <span class="text">意識したことを見る</span>
                    <span class="arrow fas fa-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
@endsection