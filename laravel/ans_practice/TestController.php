<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    //
    //public function index($text = "デフォルト")

    //クエリパラメータで値を受け取る
    public function index(Request $request)
    {
        $item = [
            'content' => 'パラメータを渡す',
            //'param' => $text
            'param' => $request->text
        ];
        return view('index', $item);
    }
}
