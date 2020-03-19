@if(Request::is('/') == false) 
    <div class="more_wrap">
        <div class="more_title_wrap fadein">
            <img alt="MOREタイトル" src="{!! asset('/img/common/more/more_title.png') !!}">
        </div>   
        <div class="more">
            <a class="fadein @if(Request::is('works')) more_none @endif" href="{{ action('WorksController@index') }}">
                <div class="more_left_wrap">
                    <img class="more_works_img" alt="WORKS" src="{!! asset('/img/common/more/works.png') !!}">
                    <div class="more_left">
                        <div class="more_title_box">
                            <span class="more_title">WORKS</span>
                            <span class="more_title_sub">作品集</span>
                        </div>
                        <div class="more_text">カフェ/不動産/音楽専門学校/転職/保育園/人材システムなどのサイトデザイン</div>
                        <span class="arrow fas fa-chevron-right"></span>
                    </div>
                </div>
            </a>
            <a class="fadein @if(Request::is('skills')) more_none @endif" href="{{ action('SkillsController@index') }}">
                <div class="more_left_wrap">
                    <img class="more_skills_img" alt="SKILLS" src="{!! asset('/img/common/more/skills.png') !!}">
                    <div class="more_left">
                        <div class="more_title_box">
                            <span class="more_title">SKILLS</span>
                            <span class="more_title_sub">できること</span>   
                        </div>
                        <div class="more_text">HP･バナー作成/UIデザイン/イラスト作成/HTML･CSS･JS/PHP(Laravel)/Ps/XD/Ai</div>
                        <span class="arrow fas fa-chevron-right"></span>
                    </div>
                </div>
            </a>
            <a class="fadein @if(Request::is('profile')) more_none @endif" href="{{ action('ProfileController@index') }}">
                <div class="more_left_wrap">
                    <img class="more_profile_img" alt="PROFILE" src="{!! asset('/img/common/more/profile.png') !!}">
                    <div class="more_left">
                        <div class="more_title_box">
                            <span class="more_title">PROFILE</span>
                            <span class="more_title_sub">自己紹介</span>
                        </div>
                        <div class="more_text">経歴や、経験(電話対応/バナーディレクション/システムデザイン)などの年表</div>
                        <span class="arrow fas fa-chevron-right"></span>
                    </div>
                </div>
            </a>
            <a class="fadein @if(Request::is('story')) more_none @endif" href="{{ action('StoryController@index') }}">
                <div class="more_left_wrap">
                    <img class="more_story_img" alt="STORY" src="{!! asset('/img/common/more/story.png') !!}">
                    <div class="more_left">
                        <div class="more_title_box">
                            <span class="more_title">STORY</span>
                            <span class="more_title_sub">デザイナーの道</span>
                        </div>
                        <div class="more_text">新卒でベンチャー企業入社、独学でWebデザイナーを目指してから現在までの過程</div>
                        <span class="arrow fas fa-chevron-right"></span>
                    </div>
                </div>
            </a>
            <a class="fadein @if(Request::is('ui')) more_none @endif" href="{{ action('UiController@index') }}">
                <div class="more_left_wrap">
                    <img class="more_ui_img" alt="UI" src="{!! asset('/img/common/more/ui.png') !!}">
                    <div class="more_left">
                        <div class="more_title_box">
                            <span class="more_title">UI UX</span>
                            <span class="more_title_sub">現職の経験</span>
                        </div>
                        <div class="more_text">現職で初デザイナーとして入社、システムの完全リニューアルを行った経験の詳細</div>
                        <span class="arrow fas fa-chevron-right"></span>
                    </div> 
                </div>
            </a>
            <a class="fadein @if(Request::is('about')) more_none @endif" href="{{ action('AboutController@index') }}">
                <div class="more_left_wrap">
                    <img class="more_concept_img" alt="CONCEPT" src="{!! asset('/img/common/more/concept.png') !!}">
                    <div class="more_left">
                        <div class="more_title_box">
                            <span class="more_title">ABOUT</span>
                            <span class="more_title_sub">サイトについて</span>
                        </div>
                        <div class="more_text">このサイトを作る際に意識した、転職のためのサイトであることの詳細</div>
                        <span class="arrow fas fa-chevron-right"></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endif