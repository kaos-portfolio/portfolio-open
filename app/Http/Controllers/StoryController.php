<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index() {

        $stories = [
            [
                'img' => 'venture', 
                'clip' => 'pink_clip',
                'label' => 'ベンチャー企業で始まった社会人生活',
                'class' => 'story_detail_right', 
                'title' => '#1 ベンチャー企業で終電、週6日で働く',
                'description' => '<span class="font_bold">不動産系のシステム会社に新卒入社。できたばかりのサポート部に所属</span>し、電話や来客対応を行う。
                    できたばかりの部署だったため、自分で考えて解決する力が身についた。<br><br>
                    週6日で夜の23時までの勤務体制。研修として何ヶ月かテレアポも行った。
                    そのような環境で社会人生活が始まったため、<span class="font_bold">根性とまずやってみる意識が身についた。</span>
                ',
            ],
            [
                'img' => 'study',
                'clip' => 'yellow_clip',
                'label' => 'Webデザイナーになるために勉強',
                'class' => 'story_detail_left', 
                'title' => '#2 バイトをしながらWebデザインの勉強を行う',
                'description' => 'ベンチャー企業を退職後、<span class="font_bold">Webデザイナーになることを決める。</span></br><br>
                    試食販売などのバイトと並行して、独学で勉強を進める。お金がなかったので休みなしで働いた。
                    勉強時間をなんとか確保しながら、<span class="font_bold">ポートフォリオサイトを完成させる。</br>
                ',
            ],
            [
                'img' => 'ps', 
                'clip' => 'pink_clip',
                'label' => 'サイト運用の仕事',
                'class' => 'story_detail_right', 
                'title' => '#3 運用の仕事でフォトショップの実務経験を積む',
                'description' => 'サイトを作り上げたものの、<span class="font_bold">未経験でスキルも低い状態だったため仕事を探すのに苦労する。</span>
                    「未経験で何ができるんですか？」のような言葉をいただいたこともあった。<br><br>
                    それでも未経験の壁を超えるために仕事を探す。                   
                    可能性を見越して採用していただいたWeb制作会社で更新作業を行う。
                    <span class="font_bold">ここで初めて実務でフォトショップを使う。</span>
                ',
            ],
            [
                'img' => 'banner', 
                'clip' => 'yellow_clip',
                'label' => 'バナーデザインの仕事',
                'class' => 'story_detail_left', 
                'title' => '#4 更に経験を積むためバナー制作の仕事に',
                'description' => 'サイト更新の仕事でフォトショップの操作ができるようになったため、<br>
                    <span class="font_bold">幅広いデザインを学ぶ目的でバナー制作の仕事を行った。</span><br><br>

                    先輩方から、デザインの基本的なことを教えていただく。<br><br>
                    
                    またバナー広告のデザインだったため学ぶことが多く、今のベースになっていると考える。<br>
                    ①スペースが限られているため、より厳選した情報を載せる必要がある<br>
                    ②広告という性質上、目的を明確にする必要がある<br><br>

                    半年ほどのデザイナー業務の後に、<span class="font_bold">営業とデザイナーの間に入るディレクターの経験</span>もさせていただいた。
                ',
            ],
            [
                'img' => 'renewal', 
                'clip' => 'pink_clip',
                'label' => '社内初デザイナーとして転職',
                'class' => 'story_detail_right', 
                'title' => '#5 社内初デザイナーとして現職に転職する',
                'description' => 'バナーデザインの経験をある程度積んだため、コーディングなども絡んだ経験を積むために、<br>
                    Webデザイナーとしての転職を決意する。<span class="font_bold">未経験の枠を抜けたと考え、正社員の転職活動を行った。</span><br><br>

                    現職に社内の初デザイナーとして入社する。<br><br>

                    システムのリニューアルを任せていただいたことへの感謝と同時に、<br>
                    デザインが良くなかったことで売れなかったら、会社や周りの人に対して申し訳ないと考えていた。<br><br>

                    そのプレッシャーもあり自主的に残業などを行い、休日もどうするか考えた。<br>
                    <span class="font_bold">結果、システムのリニューアルを行ったことで製品もUIが理由で売れるようになった。</span><br>
                ',
            ],
            [
                'img' => 'programming', 
                'clip' => 'yellow_clip',
                'label' => 'エンジニアの手伝い',
                'class' => 'story_detail_left', 
                'title' => '#6 PHPを勉強し、エンジニアタスクを手伝う',
                'description' => 'リニューアルが終わった頃、エンジニアの人数が足りていなかったため、<br>
                    <span class="font_bold">開発バイトの人や、開発の新卒が行う簡単な仕事を手伝う。</span>休日にPHP(Laravel)の勉強を行った。<br><br>
                    
                    今後もプログラミングを学ぶことで、直接的や間接的にデザインに活かせることもあると考え、<br>
                    これからも勉強をしていきたいと考えている。<br><br>

                    プログラミング以外にもデザインの勉強も行い、スキルを伸ばせるように引き続き継続している。
                ',
            ],
        ];
        
        return view('story')->with(compact('stories'));
    }
}
