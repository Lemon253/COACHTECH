<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    //public function index($text = "デフォルト")

    //クエリパラメータで値を受け取る
    /*
    public function index(Request $request)
    {
        $item = [
            'content' => 'パラメータを渡す',
            //'param' => $text
            'param' => $request->text
        ];
        return view('index', $item);
    }
        */

    //ビューを呼び出す
    public function index()
    {
        //index.blade.phpの{{$content}}に「本文」という文字列を表示
        $item = [
            'content' => '本文'
        ];
        return view('index', $item);
    }
}
