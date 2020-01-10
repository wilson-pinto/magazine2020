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
}
