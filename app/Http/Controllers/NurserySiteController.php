<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurserySiteController extends Controller
{
    //    
    public function index() {
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
        return view('works.nursery')->with(compact('news'));
    }
}
