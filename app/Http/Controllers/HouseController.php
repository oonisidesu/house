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
    public function add(Request $request){
        return view('house.add');
    }

    //投稿機能アクション(post)
    public function create(Request $request){
        $this->validate($request, House::$rules);
        $house = new House;
        $form = $request->all();
        //フォームに追加される非表示フィールドをunsetで削除
        unset($form['_token']);

        $board->fill($form)->save();
        return redirect('/house');
    }
}
