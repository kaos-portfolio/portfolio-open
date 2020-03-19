<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function index() {

        $premise = [
            [
                'img' => 'about', 
                'label' => 'そもそも、どんなシステム?',
                'title' => '人材紹介会社様向けの業務管理システム',
                'description' => '<span class="font_bold">人材会社様が、求職者情報や求人情報を管理するためのシステム</span>です。<br>求職者の履歴書を管理したり、一括メールで求人を案内することなどが可能です。
                ',
            ],
            [
                'img' => 'reason', 
                'label' => 'なぜ、リニューアルをしたの?',
                'title' => '画面遷移が多くて使いにくいというお声が多かったため',
                'description' => '
                    <span class="font_bold">画面遷移が多いという声があった</span>こと、技術的にも5年以上前のものを使用していたことが理由でシステムのリニューアルが行われました。
                ',
            ],
        ];
    
        $circumstance = [
            [
                'img' => 'inexperienced', 
                'label' => 'プレッシャーとの戦い',
                'title' => 'デザインを任せていただくプレッシャー',
                'description' => '
                    UIデザインリニューアルの走り出しの2〜3ヶ月は、<span class="font_bold">デザイナーが自分1人の環境で行いました。</span><br>
                    任せていただいた感謝と、デザインが原因で売れなかったらという<span class="font_bold">プレッシャーを常に感じていました。</span>
                ',
            ],
            [
                'img' => 'system', 
                'label' => 'まずシステムを知ること',
                'title' => 'リニューアル前のシステムの理解を深める',
                'description' => '
                    入社前に自分から代表にメールを送り、 <span class="font_bold">リニューアル前のシステムのデモ画面をいただきました。</span><br>
                    また代表に相談し、<span class="font_bold">お客様の電話対応をさせていただく</span>ことでデザインの理解を深めました。
                ',
            ],
            [
                'img' => 'director', 
                'label' => 'ディレクターのいない環境',
                'title' => 'ディレクターがいないため1から考える',
                'description' => '
                    デザインの指示は「検索画面を作ってほしい」など画面の指定のみでした。<br>
                    そのため<span class="font_bold">どの画面にどの機能が必要かなどからすべて考えて、たたき台から作りました。</span>
                ',
            ],
        ];
    
        $example = [
            [
                'img' => 'search', 
                'label' => '画面遷移を減らす',
                'title' => '検索画面と検索結果画面を一緒にする',
                'description_before' => '検索画面と一覧画面がそれぞれ別々にある状態です。<span class="font_bold">一覧画面に行くためには必ず検索画面を経由しないとならない状況</span>でした。',
                'description_after' => '検索画面と一覧画面を一緒にした画面をすることで、<span class="font_bold">検索を挟まなくても人材画面が使用できるようにいたしました。</span>',
            ],
            [
                'img' => 'result',
                'label' => '操作の回数を減らす',
                'title' => '検索ボタンを押さなくても結果がわかるように、検索ボタンに件数を出す',
                'description_before' => '検索ボタンに検索とのみ記載がある状態です。もし検索をして該当の求職者がない場合は、<span class="font_bold">再度検索をし直す必要があります。</span>',
                'description_after' => '検索ボタンに件数を表示するようにいたしました。<span class="font_bold">検索をする前に検索結果があるかどうかがわかるようになりました。</span>',
            ],
            [
                'img' => 'detail', 
                'label' => 'どの画面にいるのかがわかりやすいようにする',
                'title' => '詳細画面に固定で求職者の名前と顔写真を表示',
                'description_before' => '名前がページの上部にあるため、ページをスクロールすると<span class="font_bold">どの求職者の情報かがわかりにくくなってしまいます。</span>',
                'description_after' => '左カラムに固定で、名前と顔写真を表示。<span class="font_bold">下までスクロールしてもどの求職者の情報かが隠れないようにいたしました。</span>',
            ],
            [
                'img' => 'history',
                'label' => '必要な情報が見られるようにする',
                'title' => '人材の対応履歴を残す時に、過去の履歴を見ながら入力ができるような画面設計',
                'description_before' => '求職者の対応履歴を残すのですが、<span class="font_bold">入力画面のみが表示されている画面でした。</span>',
                'description_after' => '入力欄の横に対応履歴を表示させることで、<span class="font_bold">入力をしながら過去の対応履歴を確認することを可能にいたしました。</span>',
            ],
            [
                'img' => 'check', 
                'label' => 'どの画面にいるのかがわかりやすいようにする',
                'title' => '一覧画面画面での全チェック時に、求職者が何件選択されているかがわかりやすいように',
                'description_before' => '全チェックの範囲が<span class="font_bold">このページ限定なのか、全ページが対象なのかがわからない</span>',
                'description_after' => '求職者○人と限定した記述することで、<span class="font_bold">どの範囲の求職者がチェックされているかがわかるようになりました。</span>',
            ],
        ];
        return view('ui')->with(compact('circumstance', 'premise', 'example'));
    }
}
