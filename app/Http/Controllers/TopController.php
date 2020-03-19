<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index() {

        $works = [
            ['img' => 'recruit', 'title' => '採用サイト',],
            ['img' => 'cafe', 'title' => 'カフェサイト'],
            ['img' => 'career', 'title' => '転職サイト'],
            ['img' => 'realestate', 'title' => '不動産サイト'],
            ['img' => 'music', 'title' => '音楽専門学校サイト'],
            ['img' => 'nursery', 'title' => '保育園サイト'],
        ];

        $skills = [
            ['img' => 'hp', 'title' => 'HP・バナー作成'],
            ['img' => 'ui', 'title' => 'UIデザイン'],
            ['img' => 'illust', 'title' => 'イラスト作成',],
            ['img' => 'html', 'title' => 'HTML･CSS･JS'],
            ['img' => 'php', 'title' => 'PHP･Laravel'],
            ['img' => 'ps', 'title' => 'Photoshop'],
            ['img' => 'xd', 'title' => 'XD'],
            ['img' => 'ai', 'title' => 'Illustrator'],
        ];

        $ui = [
            [
                'img' => 'premise', 
                'label' => '前提',
                'title' => 'なぜ、デザインリニューアルをおこなったのか',
                'sub_title' => 'リニューアル前に、画面遷移が多くて使いにくいというお声が多かったためになります。',
            ],
            [
                'img' => 'circumstance', 
                'label' => '環境',
                'title' => 'デザインタスクの進め方',
                'sub_title' => 'ディレクターはいなかったため、どの機能が必要かなどから洗い出しから行いました。',
            ],
            [
                'img' => 'example', 
                'label' => '具体例',
                'title' => '画面を使いやすくするために工夫したこと',
                'sub_title' => 'リニューアル時に行った変更例の一部になります。(検索画面と一覧画面とをまとめるなど)',
            ],
        ];

        $stories = [
            [
                'img' => 'venture', 
                'title' => '#1 ベンチャー企業で終電、週6日で働く',
            ],
            [
                'img' => 'study', 
                'title' => '#2 バイトをしながらWebデザインの勉強を行う',
            ],
            [
                'img' => 'ps', 
                'title' => '#3 運用の仕事でフォトショップの実務経験を積む',
            ],
            [
                'img' => 'banner', 
                'title' => '#4 更に経験を積むためバナー制作の仕事に',
            ],
            [
                'img' => 'renewal', 
                'title' => '#5 社内初デザイナーとして現職に転職する',
            ],
            [
                'img' => 'programming', 
                'title' => '#6 PHPを勉強し、エンジニアタスクを手伝う',
            ],
        ];

        $about = [
            [
                'img' => 'job_change', 
                'title' => '転職のポートフォリオであることを意識',
            ],
            [
                'img' => 'conductor', 
                'title' => '他コンテンツへの導線がわかりやすいこと',
            ],
            [
                'img' => 'stand_out', 
                'title' => '数多くの応募の中から目立つこと',
            ],
        ];
        return view('top')->with(compact('works', 'skills', 'ui', 'stories', 'about'));
    }
}
