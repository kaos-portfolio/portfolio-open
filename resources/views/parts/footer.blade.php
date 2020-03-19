<div class="footer_wrap">
    <a href="{{ action('TopController@index') }}">
        <img class="footer_logo" alt="ロゴ画像" src="{{ asset('/img/common/header/logo.png') }}">
    </a>
    <ul class="footer_list">
        <li><a class="underline" href="{{ action('WorksController@index') }}">WORKS</a></li>
        <li><a class="underline" href="{{ action('SkillsController@index') }}">SKILLS</a></li>
        <li><a class="underline" href="{{ action('ProfileController@index') }}">PROFILE</a></li>
        <li><a class="underline" href="{{ action('StoryController@index') }}">STORY</a></li>
        <li><a class="underline" href="{{ action('UiController@index') }}">UI UX</a></li>
        <li><a class="underline" href="{{ action('AboutController@index') }}">ABOUT</a></li>
    </ul>
    <img class="footer_woman fadein" alt="女性" src="{{ asset('/img/common/footer/woman.png') }}">
</div>
<div class="copyright_wrap">
    <span class="copy_right">(C) Kao's portfolio All rights reserved.</div>
</div>