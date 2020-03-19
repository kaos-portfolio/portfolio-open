<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerSiteController extends Controller
{
    //

    public function index() {
        $new = [
            [
                'img' => 'designer',
                'title' => '自社アパレルブランドデザイナーを募集！',
                'label' => 'UIデザイナー', 
                'employment' => '正社員', 
                'income' => '430万円', 
            ],
            [
                'img' => 'engineer',
                'title' => '100%自社開発！上流工程から関われる！',
                'label' => 'Webエンジニア', 
                'employment' => '正社員', 
                'income' => '520万円', 
            ],
            [
                'img' => 'director',
                'title' => '直接取引多数！経験を更に積みたいディレクター募集',
                'label' => 'ディレクター', 
                'employment' => '正社員', 
                'income' => '480万円', 
            ],
        ];

        $category = [
            [
                'img' => 'engineer',
                'title' => 'エンジニア求人を探す',
            ],
            [
                'img' => 'designer',
                'title' => 'デザイナー求人を探す',
            ],
            [
                'img' => 'director',
                'title' => 'ディレクター求人を探す',
            ],
        ];

        $interview = [
            [
                'img' => 'interview1',
                'title' => '未経験からクリエイターの道へ',
                'label' => '24歳 Webデザイナー H.Mさん',
            ],
            [
                'img' => 'interview2',
                'title' => 'Webディレクターへ',
                'label' => '24歳 Webデザイナー H.Mさん',
            ],
            [
                'img' => 'interview3',
                'title' => 'Webディレクターへスキルアップ',
                'label' => '24歳 Webデザイナー H.Mさん',
            ],
        ];
        return view('works.career_top')->with(compact('new', 'category', 'interview'));
    }
    public function result() {
        $result = [
            [
                'img' => 'list1',
                'title' => '【フロントエンジニア】急成長中の自社宅配サービスを一緒に作りませんか？',
                'category' => 'フロントエンドエンジニア', 
                'employment' => '正社員', 
                'company' => '株式会社ネクストアクション', 
                'income' => '480万円', 
                'place' => '東京都港区', 
                'label1' => '急募', 
                'label2' => '未経験可能', 
                'description' => '急成長中の自社宅配サービスを一緒に作っていきませんか？20名体制で、経験豊富なエンジニアが在籍しています。新しい技術も積極的に取り入れ、成長したい人にぴったりの環境です。',
                'date1' => '2020/01/20',
                'date2' => '2019/12/03', 
            ],
            [
                'img' => 'list2',
                'title' => '【ゲームディレクター】120万DLのゲームディレクターを募集中です！',
                'category' => 'ディレクター', 
                'employment' => '正社員', 
                'company' => '株式会社ネクストドア', 
                'income' => '530万円', 
                'place' => '東京都渋谷区', 
                'label1' => '急募', 
                'label2' => '未経験可能', 
                'description' => '今CMでも大人気のゲームタイトルのディレクターを募集です。ゲームディレクターの経験者の方、大歓迎です。業界未経験の方も、ディレクターの経験があればご応募可能です！',
                'date1' => '2020/01/20',
                'date2' => '2019/12/03', 
            ],
            [
                'img' => 'list3',
                'title' => '【UIデザイナー】コーディングからデザインまでできるデザイナー募集！',
                'category' => 'UIデザイナー', 
                'employment' => '正社員', 
                'company' => '株式会社ステップステップ', 
                'income' => '450万円', 
                'place' => '東京都新宿区', 
                'label1' => '急募', 
                'label2' => '未経験可能', 
                'description' => '急成長中の自社宅配サービスを一緒に作っていきませんか？20名体制で、経験豊富なエンジニアが在籍しています。新しい技術も積極的に取り入れ、成長したい人にぴったりの環境です。',
                'date1' => '2020/01/20',
                'date2' => '2019/12/03', 
            ],
        ];
        return view('works.career_result')->with(compact('result'));
    }

    public function detail() {
        $news = [
            [
                'img' => 'news1',
                'title' => '運動会開催しました。',
                'label' => 'イベント', 
            ],
            [
                'img' => 'news2',
                'title' => '運動会開催しました。',
                'label' => 'イベント', 
            ],
            [
                'img' => 'news3',
                'title' => '運動会開催しました。',
                'label' => 'イベント', 
            ],
        ];

        $recommend = [
            [
                'img' => 'recommend1',
                'title' => '自社アパレルブランドデザイナーを募集',
                'label' => 'デザイナー', 
                'employment' => '正社員', 
                'income' => '420万円', 
            ],
            [
                'img' => 'recommend2',
                'title' => 'エンジニア大募集★年間休日126日&土日祝休み★残業少なめ',
                'label' => 'エンジニア', 
                'employment' => '正社員', 
                'income' => '510万円', 
            ],
            [
                'img' => 'recommend3',
                'title' => '100%自社開発！上流工程から関われる！',
                'label' => 'エンジニア', 
                'employment' => '正社員', 
                'income' => '550万円', 
            ],
            [
                'img' => 'recommend4',
                'title' => '直接取引多数！経験を更に積みたいディレクター募集',
                'label' => 'ディレクター', 
                'employment' => '正社員', 
                'income' => '480万円', 
            ],
            [
                'img' => 'recommend5',
                'title' => '急成長中の自社宅配サービスを一緒に作りませんか？',
                'label' => 'エンジニア', 
                'employment' => '正社員', 
                'income' => '520万円', 
            ],
            [
                'img' => 'recommend6',
                'title' => '120万DLのゲームディレクターを募集中です！',
                'label' => 'ディレクター', 
                'employment' => '正社員', 
                'income' => '530万円', 
            ],
        ];

        return view('works.career_detail')->with(compact('news', 'recommend'));
    }

}
