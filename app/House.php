<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //値(id)がnullでもエラーなく動作するように設定
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'content' => 'required',
    );
}
