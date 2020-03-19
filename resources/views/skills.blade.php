@extends('layout')

@section('title', 'SKILLS(できること)・Kaos&nbsp;ポートフォリオ')

@section('scss')
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@endsection

@section('content')
    <div class="skills_detail_title fadein_first">
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
        <img class="skills_title_bg" alt="SKILLS背景" src="{!! asset('/img/skills/skills_title_bg.png') !!}">
    </div>

    <div class="skills_detail_wrap">
        <div class="skills_detail_inner fadein_second">
            <img class="yellow_clip" alt="クリップ" src="{!! asset('/img/common/item/yellow_clip.png') !!}">
            @foreach($skills_list as $item)
                <span class="skills_anchorlink" id="{!! $item['img'] !!}"></span>
                <div class="skills_detail @if($loop->first) fadein_first @elseif ($loop->index == 1 ) fadein_second @else fadein @endif">
                    <div class="skills_inner">    
                        <div class="skill_img_bg">
                            <div class="skill_img_bg_inner @isset($item['class']){!! $item['class'] !!}@endif">
                                <img alt="{!! $item['label'] !!}" src="{!! asset('/img/skills/big/'.$item['img'].'.png') !!}">
                            </div>
                        </div>
                        <div class="skills_detail_right">
                            <p class="yellow_label">{{ $item['label'] }}</p>
                            <h3>{{ $item['name'] }}</h3>
                            <p class="sp_none">{!! $item['description'] !!}</p>
                        </div>         
                        @isset($item['link'])
                            <a class="skills_link_wrap link_bg_yellow" href="{!! $item['link'] !!}">
                                <span class="skills_link">{{$item['link_name']}}</span>
                                <span class="arrow fas fa-chevron-right"></span>
                            </a>
                        @endisset
                        @isset($item['github_link'])
                            <a class="skills_link_wrap link_bg_yellow" href="https://github.com/kaos-portfolio/portfolio-open" target="_blank">
                                <span class="skills_link">{!! $item['github_link'] !!}</span>
                                <span class="arrow fas fa-chevron-right"></span>
                            </a>
                        @endisset
                    </div>
                    <p class="pc_none">{{!! $item['description'] !!}}</p>
                </div>
            @endforeach
        </div>            
    </div>
@endsection