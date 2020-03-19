<div class="header_wrap">
    <div class="header_wrap_inner">
        <a href="{{ action('TopController@index') }}">
            <img alt="ロゴ画像" src="{{ asset('/img/common/header/logo.png') }}">
        </a>
        <ul class="header_list">
            <li><a href="{{ action('WorksController@index') }}">WORKS</a></li>
            <li><a href="{{ action('SkillsController@index') }}">SKILLS</a></li>
            <li><a href="{{ action('ProfileController@index') }}">PROFILE</a></li>
            <li><a href="{{ action('StoryController@index') }}">STORY</a></li>
            <li><a href="{{ action('UiController@index') }}">UI DESIGN</a></li>
            <li><a href="{{ action('AboutController@index') }}">CONCEPT</a></li>
        </ul>
    </div>
</div>