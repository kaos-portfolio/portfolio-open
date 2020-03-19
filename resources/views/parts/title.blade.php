<div class="title_wrap">
    <img alt="回答アイコン" src="{!! asset('/img/common/title/'.$img.'.png') !!}">
    <div class="title_right">
        <div class="title">
            <h2>{{$title}}</h2>
            <span>{{$sub_title}}</span>
        </div>
        <p>{!! nl2br(e( $description )) !!}<p>
    </div>
</div>