<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    // 追加
    public function index()
    {
        //diariesテーブルのデータを全件取得
        //useしてるDiaryのallメソッドを実施
        //all()はテーブルのデータを全て取得するメソッド
        $diaries = Diary::all(); 

        // dd($diaries);  //var_dump()とdie()を合わせたメソッド。変数の確認 + 処理のストップ
        return view('diaries.index',['diaries' => $diaries]);   
    }

    public function create()
    {
        // views/diaries/create.blade.phpを表示する
        return view('diaries.create');
    }
    // $request =リクエストの情報が入ったインスタンス
    public function store(Request $request)
{
    $diary = new Diary(); //Diaryモデルをインスタンス化

    $diary->title = $request->title; //画面で入力されたタイトルを代入
    $diary->body = $request->body; //画面で入力された本文を代入
    $diary->save(); //DBに保存

    return redirect()->route('diary.index'); //一覧ページにリダイレクト
}
}
