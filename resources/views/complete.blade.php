@extends('layout_contact')

@section('content')
    <div class="complete_wrap">
        <h2>ご連絡をいただき、ありがとうございました。</h2>
        <p>2〜3日以内にお返事をさせていただきます。</p>
        <div class="btn_wrap">
            <a class="blue_btn" href="{{ action('TopController@index') }}">TOPに戻る</a>
        </div>
    </div>
    
@endsection