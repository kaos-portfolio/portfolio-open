@extends('layout_contact')

@section('content')
    <div class="confirm_wrap">
        <form class="confirm_inner" action="{{action('ContactController@process')}}" method="post">
            {{ csrf_field() }}
            <div class="contact_title_wrap">
                <img alt="メール" src="{!! asset('/img/common/contact/mail.png') !!}">
                <div>
                    <span>\2020年3月転職活動中です！/</span>
                    <h2>お気軽にお問い合わせ下さい</h2>
                </div>
            </div>
            <ul class="confirm_list">
                <li>
                    <span class="label">お名前</span>
                    <span class="text">{{$contact->name}}<span>
                </li>
                <li>
                    <span class="label">メールアドレス</span>
                    <span class="text">{{$contact->email}}</span>
                </li>
                <li>
                    <span class="label">会社名</span>
                    <span class="text">{{$contact->company}}</span>
                </li>
                <li>
                    <span class="label">内容</span>
                    <span class="text">{{$contact->message}}</span>
                </li>
            </ul>

            @foreach($contact->getAttributes() as $key => $value)
                <input type="hidden" name="{{$key}}" value="{{$value}}">
            @endforeach

            <div class="btn_wrap">
                <div class="btn_wrap move">
                    <input class="white_btn" type="submit" name="action" value="修正する">
                    <span class="arrow fas fa-chevron-right"></span>
                </div> 
                <div class="btn_wrap move">
                    <input class="pink_btn" type="submit" name="action" value="送信する">
                    <span class="arrow fas fa-chevron-right"></span>
                </div>
            </div>
        </form>
    </div>
@endsection