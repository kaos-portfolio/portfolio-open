<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealEstateSiteController extends Controller
{
    //
    public function index() {
        $real_estate = [
            [
                'img' => 'staff1',
                'name' => '佐々木 舞',
                'name_english' => 'Sasaki Mai', 
            ],
            [
                'img' => 'staff2',
                'name' => '田中 咲',
                'name_english' => 'Tanaka Saki', 
            ],
            [
                'img' => 'staff3',
                'name' => '鈴木 健一',
                'name_english' => 'Suzuki Kenichi', 
            ],
        ];
        return view('works.realestate')->with(compact('real_estate'));
    }
}
