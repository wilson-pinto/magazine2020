<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cat_rid';
    public $timestamps = false;

    public function article()
    {
        return $this->hasMany('App\Models\Article', 'cat_rid');
    }
    public function post()
    {
        return $this->hasMany('App\Models\Post', 'cat_rid');
    }
}
