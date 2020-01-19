<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    protected $primaryKey = 'author_rid';

    public function article()
    {
        return $this->hasMany('App\Models\Article', 'article_rid');
    }

    public function post()
    {
        return $this->hasMany('App\Models\Post', 'post_rid');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch', 'branch_rid');
    }
}
