<?php

namespace App\Manager;

use App\Models\Category;
use DB;

class CommonFunctions
{

    public static function getCategories()
    {
        return Category::withCount(['post' => function ($post) {
            $post->where('status', 1);
        }])
            ->withCount(['article' => function ($article) {
                $article->where('status', 1);
            }])
            ->get();;
    }
}
