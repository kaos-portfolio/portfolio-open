<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index() {

        $skills_list = [
            [
                'img' => 'hp',
                'label' => 'デザイン', 
                'name' => 'HP・バナー作成', 
                'description' => '<span class="font_bold">実務でHPとバナーの経験があります。</span>作った作品は作品集に掲載しております。自主的にTOPページを20個以上作成するなどで今もスキルを向上させております。', 
                'link_name' => '作品集を見る',
                'link' => 'http://kaos-portfolio.com/works',
                'class' => 'hp_wrap',
            ],
            [
                'img' => 'ui',
                'label' => 'デザイン', 
                'name' => 'UIデザイン', 
                'description' => '現職でディレクターがいない中で、システムのデザインリニューアルを致しました。リニューアルの結果、<span class="font_bold">使いやすさが理由での受注が7〜8割ほどになりました。</span>', 
                'link_name' => 'リニューアルの詳細を見る',
                'link' => 'http://kaos-portfolio.com/uiux',
                'class' => 'ui_wrap',
            ],
            [
                'img' => 'illust',
                'label' => 'デザイン', 
                'name' => 'イラスト', 
                'description' => '
                    簡単なイラストの作成が可能です。今回のポートフォリオサイトでも、<span class="font_bold">イラストとロゴの作成</span>を行いました。
                ', 
                'class' => 'illust_wrap',
            ],
            [
                'img' => 'html',
                'label' => 'コーディング', 
                'name' => 'HTML･CSS(SCSS)･JS', 
                'description' => '
                    <span class="font_bold">実務でコーディングの経験</span>があります。<span class="font_bold">スマホ対応</span>も可能です。
                    <span class="font_bold">業務ではGithubを使用し、scss・vue.js・nuxt.js・Laravelで記載されたコードの編集を行いました。</span>(vue.jsのコンポーネント化や、v-ifやv-forなども書くことができます。)
                ', 
            ],
            [
                'img' => 'php',
                'label' => 'プログラミング', 
                'name' => 'PHP･Laravel(基礎レベル)', 
                'description' => '
                    PHPの基礎と、Laravelの学習を休日に行いました。<span class="font_bold">現職のエンジニアの簡単なタスクのお手伝いをしました。</span>このサイトもLaravelで作成を行い、ループで表示させたり、if文で項目の出し分けを行っております。
                ', 
                'github_link' => 'このポートフォリオのGithubを見る',
            ],
            [
                'img' => 'ps',
                'label' => 'デザインソフト', 
                'name' => 'Photoshop', 
                'description' => '
                    業務でも頻繁に使っております。ショートカットなども含め、問題なく使用できます。<span class="font_bold">レタッチや、gif画像の作成</span>なども可能です。
                ', 
                'class' => 'ps_wrap',
            ],
            [
                'img' => 'xd',
                'label' => 'デザインソフト', 
                'name' => 'XD', 
                'description' => '
                    業務でも頻繁に使っております。ショートカットなども含め、問題なく使用できます。お客様への共有で、共有機能なども使用致しました。
                ', 
                'class' => 'ps_wrap',
            ],
            [
                'img' => 'ai',
                'label' => 'デザインソフト', 
                'name' => 'Illustrator', 
                'description' => '
                    <span class="font_bold">簡単なアイコンの作成</span>など、対応できます。今回のポートフォリオサイト作成のイラスト作成においても使用しています。
                ', 
                'class' => 'ai_wrap',
            ],
        ];
        return view('skills')->with(compact('skills_list'));
    }
}
