@extends('layout')

@section('title', 'STORY(デザイナーの道)・Kaos&nbsp;ポートフォリオ')

@section('scss')
    <link rel="stylesheet" href="{{ asset('/css/story.css') }}">
@endsection

@section('content')
    <div class="story_title_wrap fadein_first">
        @include('parts.title',
            [
                'title' => 'STORY',
                'img' => 'story',
                'sub_title' => 'デザイナーの道',
                'description' => '
                    独学でデザイナーを目指してからと、現職までのまとめになります
                ',
            ]
        )
        <img class="story_bg" alt="STORY背景" src="{!! asset('/img/story/story_title_bg.png') !!}">
    </div>

    <div class="story_wrap fadein_first">
        <div class="story_list">
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
    
    <div class="story_detail_wrap">
        <div class="story_detail_inner fadein">
            @foreach($stories as $item)
                <div id="{!!$item['img']!!}" class="story_unchor_link"></div>
                <div class="{!! $item['class'] !!} fadein">
                    <div class="story_detail_title">
                        <h3>{{ $item['title'] }}</h3>
                        <span class="label">{{ $item['label'] }}</span>
                    </div>
                    <div class="story_detail">
                        {!! $item['description'] !!}
                    </div>
                    <div class="story_detail_img_wrap">
                        <div class="story_detail_img_inner">
                            <img alt="{!! $item['title'] !!}" src="{!! asset('/img/story/big/'.$item['img'].'.png') !!}">
                        </div>
                    </div>
                    <img class="{!! $item['clip'] !!}" alt="クリップ" src="{!! asset('/img/common/item/'.$item['clip'].'.png') !!}">
                    <img class="story_detail_bg" alt="背景" src="{!! asset('/img/story/big/story_detail_bg.png') !!}">
                </div>
            @endforeach
        </div>
    </div>
@endsection