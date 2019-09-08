<?php

namespace App\Http\Controllers;

//Houseモデルを使う
use App\House;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    //一覧表示アクション
    public function index(Request $request){
        $items = House::all();
        return view('house.index', ['items' => $items]);
    }

    //投稿機能アクション(get)
    public function add(){
        return view('house.add');
    }

    //投稿機能アクション(post)
    public function create(Request $request){
        //バリデーションを設定（Houseモデルに詳細がある）
        $this->validate($request, House::$rules);

        //Houseモデルのインスタンスを作成
        $house = new House;

        //フォームに追加される非表示フィールドをunsetで削除
        $form = $request->all();
        unset($form['_token']);

        //タイトル
        $house->title = $request->title;

        //コンテンツ
        $house->content = $request->content;

        //画像(storeAsが)
        $house->image_url = $request->image_url; //->storeAs('public/house_images', $time. '.jpg');

        //houseインスタンスの情報をデータベースに保存
        $house->save();

        //一覧表示にリダイレクト
        return redirect('/');
    }
}
