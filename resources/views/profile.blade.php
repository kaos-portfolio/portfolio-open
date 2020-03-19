@extends('layout')
@section('title', 'PROFILE(自己紹介)・Kaos&nbsp;ポートフォリオ')
@section('scss')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection
@section('content')

<div class="profile_title_wrap fadein_first">
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
    <img class="fadein_second sp_none" alt="プロフィール" src="{!! asset('/img/profile/profile.gif') !!}">
    <img class="fadein_second pc_none" alt="プロフィール" src="{!! asset('/img/profile/profile_sp.gif') !!}">
    <div class="profile_supplement_wrap fadein">
        <p class="profile_supplement">※年齢や、学部、社名の情報は個人が特定できないようにしてあります。選考時に詳細をお伝え致します。</p>
    </div>
    <img class="profile_title_bg" alt="PROFILE背景" src="{!! asset('/img/profile/profile_title_bg.png') !!}">
</div>

<div class="chronology_box_wrap">
    <div class="chronology_box_wrap_inner fadein">
        <div class="chronology">
            <h3># Kao’sの年表</h3>
        </div>
        <div class="chronology_explain_wrap">
            <p class="chronology_explain">正社員としては2社経験です。</span>
            <p class="chronology_explain_description">派遣・バイトの期間は、未経験から独学でWEBデザイナーになるための期間です。</span>
            <img class="chick" alt="ひよこ" src="{!! asset('/img/profile/chick.png') !!}">
            <img class="clip" alt="青色クリップ" src="{!! asset('/img/common/item/blue_clip.png') !!}">
        </div>
        <div class="chronology_wrap">
            <ul>
                <li class="chronology_title_big fadein">
                    <span class="chronology_circle_blue"></span>
                    <span>ベンチャー企業に新卒入社 2年</span>
                    <span class="blue_label">正社員</span>
                </li>
                <li class="chronology_description_big fadein">
                    不動産系のシステム会社に新卒入社。立ち上がったばかりのサポート部所属で、電話対応を行う。<br>週6日勤務、夜の23時まで勤務。
                </li>
                <li class="chronology_skill fadein">
                    <p class="chronology_skill_title">#スキル・経験</span>
                    <p class="chronology_detail">電話対応・来客対応・テレアポ・ドメイン発行(移管)・サーバー設定など</span>
                    <img alt="プロフィール" src="{!! asset('/img/profile/phone.png') !!}">
                </li>
            </ul>
            <ul>
                <li class="chronology_title_small fadein">
                    <span class="chronology_circle_blue"></span>
                    <span>(バイトからステップアップして、デザイナーになることを決める。独学で勉強を開始する。)</span>
                </li>
            </ul>
            <ul>
                <li class="chronology_title_small fadein">
                    <span class="chronology_circle_white"></span>
                    <span>Web制作会社(サイト更新)・試食販売・チラシ配り</span>
                    <span class="white_label">バイト</span>
                </li>
                <li class="chronology_description_small fadein">
                    生活費の関係で、試食販売やチラシ配りを行いながらWebデザインの勉強を進める。<br>
                    その後、Web制作会社に入社してサイトの更新をしながらPhotoshopを覚える。
                </li>
            </ul>
            <ul>
                <li class="chronology_title_small fadein">
                    <span class="chronology_circle_white"></span>
                    <span>インターネット広告会社(バナー制作)</span>
                    <span class="white_label">派遣</span>
                </li>
                <li class="chronology_description_small fadein">
                    デザイン経験を積むために、ネット広告会社でバナー制作の仕事を行う。<br>途中からディレクションも経験。ここで基本的なデザインの考え方を学ぶ。
                </li>
                <li class="chronology_skill fadein">
                    <p class="chronology_skill_title">#スキル・経験</span>
                    <p class="chronology_detail">バナー制作・ディレクション</span>
                    <img alt="プロフィール" src="{!! asset('/img/profile/banner.png') !!}">
                </li>
            </ul>
            <ul>
                <li class="chronology_title_big fadein">
                    <span class="chronology_circle_blue"></span>
                    <span>人材会社様向けのシステム会社に入社(現職) 3年10ヶ月</span>
                    <span class="blue_label">正社員</span>
                </li>
                <li class="chronology_description_big fadein">
                    コーディングやサイトデザインなど幅を広げるために入社。<br>
                    社内の初めてのデザイナーとして入社後1年間は、1人ですべてのデザイン業務を行う。<br>
                    システムリニューアルも最初の2〜3ヶ月はすべて1人で対応していた。
                </li>
                <li class="chronology_skill fadein">
                    <p class="chronology_skill_title">#スキル・経験</span>
                    <p class="chronology_detail">UIデザイン・HP作成・コーディング(SCSS使用)・エンジニアのお手伝い(PHP)・githubを使用</span>
                    <img alt="PC" class="chronology_pc" src="{!! asset('/img/profile/pc.png') !!}">
                </li>
            </ul>
        </div>
        <div class="chronology_line fadein"></div>
    </div>
</div>
    
@endsection