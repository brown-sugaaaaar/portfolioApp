<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','detail','image_url']; //保存したいカラム名が複数の場合
}
