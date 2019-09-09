<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //値(id)がnullでもエラーなく動作するように設定
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required|max:10',
        'content' => 'required|min:5|max:100',
        'image_url' => 'required'
    );

    // UserモデルをHouseで扱える？
    public function user(){
        return $this->belongsTo('App\User');
    }
}
