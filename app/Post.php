<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 1つの投稿に対して0以上
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}