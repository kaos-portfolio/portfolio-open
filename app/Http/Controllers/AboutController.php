<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {

        $job_change = [
            [
                'how' => '転職理由・スキル・経験などのコンテンツを作成', 
                'why' => '<span class="font_bold">なぜ転職をしたいのか、どんな経歴があり、何ができるのか</span>が重要と考えてコンテンツを作成いたしました。', 
            ],
            [
                'how' => '制作意図が伝わるコンテンツを充実', 
                'why' => '<span class="font_bold">制作意図をお伝えできるように</span>WORKSや、UI UX、ABOUTページなどに詳しく説明をさせて頂きました。', 
            ],
            [ 
                'how' => 'ポートフォリオサイト自体にjs、スマホ対応やLaravelなどの技術を入れる', 
                'why' => 'jsなどの動きの多いサイトにしました。言葉のみではなく、<span class="font_bold">実際の作品を通じてスキルをお伝えできたらと考えた</span>ためです。', 
            ],
        ];

        $conductor = [
            [
                'how' => '各ページにKao’sをもっと知るを配置', 
                'why' => 'コンテンツを見終わった後に、<span class="font_bold">スムーズに他のページに移動していただけるように</span>設置いたしました。', 
            ],
            [
                'how' => '大事なリンクは繰り返し設置する', 
                'why' => 'WORKSページがわかりやすいのですが、サイトを見るボタンを3箇所に設置しています。<span class="font_bold">大事なボタンが目立つことを意識</span>しています。', 
            ],
            [
                'how' => 'TOPページを通じて、各コンテンツの内容がわかるようにする', 
                'why' => 'WORKSなどに比べて、STORYやUIデザインなどページの<span class="font_bold">中身が想像しにくいコンテンツもあるので、導線の近くに説明を充実</span>させました。', 
            ],
        ];

        $stand_out = [
            [
                'how' => 'イラストを使用する', 
                'why' => 'イラストは<span class="font_bold">個性が出やすく、差別化が図りやすい</span>ために使用しました。', 
            ],
            [
                'how' => '目立つ色を使用する', 
                'why' => '黄色をメインにすることで、<span class="font_bold">印象に残ることを意識</span>しました。', 
            ],
            [
                'how' => 'STORYなどコンテンツを工夫する', 
                'why' => '他のサイトとの差別化としてSTORYなど、<span class="font_bold">一般的なポートフォリオには少ないと考えたコンテンツを用意</span>しました。', 
            ],
        ];

        return view('about')->with(compact('job_change', 'conductor', 'stand_out'));
    }
}
