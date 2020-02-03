<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'article_rid';

    public function author()
    {
        return $this->belongsTo('App\Models\Author', 'author_rid');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_rid');
    }
}
