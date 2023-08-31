<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MicrosoftController extends Controller
{
    public function microsoft()
    {
        // $news = DB::table('news')->get();

        // $news = News::where('title', '=', 'Xbox Series X')->get();
        // $news = News::get();

        // find() 找id
        // get() 把符合條件的資料，以collection顯示
        // all() 全部
        // first() 找第一筆
        // skip() 略過幾筆
        // take() 取幾筆


        // 請找出最新的三筆
        // $news = News::where('id', '>', '3')->get();
        // $news = News::skip(3)->take(3)->get();
        // 請找出最舊的三筆
        // $news = News::where('id', '<', '4')->get();
        // $news = News::orderBy('id', 'desc')->take(3)->get();
        // 請找出隨機的三筆
        $news = News::inRandomOrder()->take(4)->get();

        // foreach ($news as $key => value) {
        //     dump($value->title);
        // }

        // 寫法一
        // "key"(blade用到的變數名稱(記得$)) =>"value"(key的數值)
        // "," 後面物件""name"代表key值，在blade頁面上用$name顯示 "James"
        return view ('microsoft.microsoft-2', ['news' => $news]);


        // 寫法二
        // compact 幫我們打包變數['news' => $news,'q2' => $q2]
        // return view ('microsoft.microsoft-2', compact('news','q2'));

        // dump and die
        dd($news);

        // return view('microsoft.microsoft-2');
    }
}
