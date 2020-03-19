<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicSiteController extends Controller
{
    //
    public function index() {
        $music_course = [
            [
                'img' => 'vocal',
                'title' => 'ボーカルコース',
            ],
            [
                'img' => 'guitar',
                'title' => 'ギターコース',
            ],
            [
                'img' => 'keyboard',
                'title' => 'キーボードコース',
            ],
            [
                'img' => 'drum',
                'title' => 'ドラムコース',
            ],
        ];

        $music_reason = [
            [
                'img' => 'vocal',
                'title' => 'ボーカルコース',
            ],
            [
                'img' => 'guitar',
                'title' => 'ギターコース',
            ],
            [
                'img' => 'keyboard',
                'title' => 'キーボードコース',
            ],
            [
                'img' => 'drum',
                'title' => 'ドラムコース',
            ],
        ];

        $music_reason = [
            [
                'number' => '1',
                'img' => 'human',
                'title' => '圧倒的に就職に強い',
                'description' => '就職率90%以上！OGOBとのつながりも強いため、就職の相談もしやすい環境です。',
            ],
            [
                'number' => '2',
                'img' => 'map',
                'title' => '新宿駅から徒歩3分',
                'description' => '新宿駅から徒歩3分の好立地！バイトや就職活動との両立もしやすいです。',
            ],
            [
                'number' => '3',
                'img' => 'class',
                'title' => '少人数制クラス',
                'description' => '少人数制を徹底しています。講師が一人ひとりをしっかり見ているため、きめ細かい指導が可能です。',
            ],
        ];

        return view('works.music')->with(compact('music_course', 'music_reason'));
    }
}
