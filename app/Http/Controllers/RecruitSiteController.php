<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitSiteController extends Controller
{
    //
    public function index() {

        $recruit_about = [
            [
                'img' => 'message',
                'title' => 'Message',
                'label' => '採用メッセージ', 
                'description' => '採用にあたって、皆さんにお伝えしたいことを人事部長メッセージ、代表挨拶でお伝えいたします。', 
            ],
            [
                'img' => 'culture',
                'title' => 'Culture',
                'label' => '文化', 
                'description' => '創業以来、挑戦を続けてきた弊社が大切にしている価値観、行動指針などをお伝えします。', 
            ],
            [
                'img' => 'welfare',
                'title' => 'Welfare',
                'label' => '福利厚生', 
                'description' => '住宅手当などの他に、誕生日お祝い金制度などのユニークな福利厚生もご用意しています。', 
            ],
            [
                'img' => 'question',
                'title' => 'Question',
                'label' => 'よくある質問', 
                'description' => '採用にあたって、よくいただくご質問にお答えいたします。', 
            ],
        ];

        $recruit_application = [
            [
                'label' => '新卒採用',
                'title' => '法人営業', 
                'description' => 'お客様の課題をヒアリングして、提案を行うコンサルティング型の営業スタイルです。', 
            ],
            [
                'label' => '中途採用',
                'title' => 'エンジニア', 
                'description' => '100%自社開発のため、上流過程から開発に関われます。', 
            ],
            [
                'label' => '中途採用',
                'title' => 'UIデザイナー', 
                'description' => '運営中のゲームのUIデザイン改善をおまかせします。', 
            ],
        ];


        $recruit_interview = [
            [
                'img' => 'sales',
                'label' => 'Sales',
                'name' => '田中　美咲', 
                'name_english' => 'Tanaka Misaki', 
                'description' => 'お客様の経営課題を解決することに全力をそそいでいます', 
                'joining' => '2010年入社 第一営業部',
            ],
            [
                'img' => 'engineer',
                'label' => 'Engineer',
                'name' => '田中　真一', 
                'name_english' => 'Tanaka Shinichi', 
                'description' => '上流工程から関われたことで、成長することができました。', 
                'joining' => '2013年入社 第二開発部',
            ],
            [
                'img' => 'designer',
                'label' => 'Designer',
                'name' => '佐々木 舞', 
                'name_english' => 'Sasaki Mai', 
                'description' => '小さい改善の積み重ねが、お客様の大きな満足につながっています', 
                'joining' => '2015年入社 第一開発部',
            ],
        ];

        return view('works.recruit')->with(compact('recruit_about' ,'recruit_application', 'recruit_interview'));
    }
}
