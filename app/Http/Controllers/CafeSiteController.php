<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeSiteController extends Controller
{
    //
    public function index() {
        $menu = [
            [
                'img' => 'menu1',
                'name' => 'バナナチョコパンケーキ',
                'label' => 'バナナ・チョコ', 
                'price' => '¥1,980', 
            ],
            [
                'img' => 'menu2',
                'name' => 'いちごパンケーキ',
                'label' => 'いちご・アイスクリーム', 
                'price' => '¥1,980', 
            ],
            [
                'img' => 'menu3',
                'name' => 'パンケーキアラカルト',
                'label' => 'いちご・みかん・バナナ', 
                'price' => '¥1,580', 
            ],
            [
                'img' => 'menu1',
                'name' => 'バナナチョコパンケーキ',
                'label' => 'バナナ・チョコ', 
                'price' => '¥1,980', 
            ],
            [
                'img' => 'menu2',
                'name' => 'いちごパンケーキ',
                'label' => 'いちご・アイスクリーム', 
                'price' => '¥1,980', 
            ],
            [
                'img' => 'menu3',
                'name' => 'パンケーキアラカルト',
                'label' => 'いちご・みかん・バナナ', 
                'price' => '¥1,580', 
            ],
        ];
        $news = [
            [
                'img' => 'news1',
                'title' => '年末年始の営業に関しまして',
                'date' => '2019.12.3',
            ],
            [
                'img' => 'news2',
                'title' => 'マンゴーフェア開催中です。',
                'date' => '2019.12.3',
            ],
            [
                'img' => 'news3',
                'title' => 'いちごパンケーキが大人気です。',
                'date' => '2019.12.3',
            ],
        ];
        return view('works.cafe')->with(compact('menu', 'news'));
    }
}
