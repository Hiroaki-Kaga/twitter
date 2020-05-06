<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //===ここから追加===
    //hasMany設定
    public function cards()
    {
        return $this->hasMany('App\Card');
    }
    //===ここまで追加===
}