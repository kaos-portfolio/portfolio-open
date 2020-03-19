<div id="contact" class="@if(Request::is('/')) contact_form_top @else contact_form @endif">
    <div class="contact_form_inner @if(Request::is('contact') || Request::is('/#contact')) fadein_first @else fadein @endif">
        <div class="contact_title_wrap @if(Request::is('contact') || Request::is('/#contact')) fadein_first @else fadein @endif">
            <img alt="メール" src="{!! asset('/img/common/contact/mail.png') !!}">
            <div class="contact_title_description">
                <span class="contact_title_description_sub">\&nbsp;2020年3月転職活動中です&nbsp;/</span>
                <h2>お気軽にお問い合わせ下さい</h2>
            </div>
        </div>
        <form action="{{action('ContactController@confirm')}}#contact" method="post">
            {{ csrf_field() }}
            <ul class="contact">
                <li class="@if(Request::is('contact')) fadein_first @else fadein @endif">
                    <div><span class="contact_title">お名前</span><span class="red_label">必須</span></div>
                    <input class="@if($errors->has('name')) error_input @endif" value="{{old('name')}}" name="name" type="text" placeholder="お名前をご入力ください。">
                    @if($errors->has('name'))
                        <p class="error_message">※{{$errors->first('name')}}</p>
                    @endif
                </li>
                <li class="@if(Request::is('contact')) fadein_first @else fadein @endif">
                    <div><span class="contact_title">会社名</span><span class="red_label">必須</span></div>
                    <input class="@if($errors->has('name')) error_input @endif" value="{{old('company')}}" name="company" type="text" placeholder="会社名をご入力ください。">
                    @if($errors->has('company'))
                        <p class="error_message">※{{$errors->first('company')}}</p>
                    @endif
                </li>
                <li class="@if(Request::is('contact')) fadein_first @else fadein @endif">
                    <div><span class="contact_title">メールアドレス</span><span class="red_label">必須</span></div>
                    <input class="@if($errors->has('name')) error_input @endif" value="{{old('email')}}" name="email" type="text" placeholder="部署名をご入力ください。">
                    @if($errors->has('email'))
                        <p class="error_message">※{{$errors->first('email')}}</p>
                    @endif
                </li>
                <li class="@if(Request::is('contact')) fadein_first @else fadein @endif">
                    <div><span class="contact_title">内容</span><span class="red_label">必須</span></div>
                    <textarea class="@if($errors->has('name')) error_input @endif" name="message" placeholder="内容をご入力ください。">{{old('message')}}</textarea>
                    @if($errors->has('message'))
                        <p class="error_message">※{{$errors->first('message')}}</p>
                    @endif
                </li>
            </ul> 
            <div class="btn_wrap move @if(Request::is('contact')) fadein_first @else fadein @endif">
                <input type="submit" class="pink_btn" value="確認画面に進む">
                <span class="arrow fas fa-chevron-right"></span>
            </div>
        <img class="contact_top_bg sp_none @if(Request::is('contact')) fadein_first @else fadein @endif" alt="コンタクト背景_上" src="{!! asset('/img/common/contact/contact_top_bg.png') !!}">
        <img class="contact_bottom_bg fadein sp_none" alt="コンタクト背景_下" src="{!! asset('/img/common/contact/contact_bottom_bg.png') !!}">
        <img class="contact_chick fadein sp_none" alt="ひよこ" src="{!! asset('/img/common/contact/chick.png') !!}">
    </div>
</div>