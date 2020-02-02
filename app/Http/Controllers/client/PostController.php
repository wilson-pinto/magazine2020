<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Manager\CommonFunctions;
use App\Models\Article;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($catName, $catRid, $type)
    {
        $currentCat = Category::find($catRid);
        $categories = CommonFunctions::getCategories();


        if ($type == 1) {
            $posts = Post::with(['author' => function ($author) {
                $author->with('branch');
            }])
                ->where('status', 1)
                ->where('cat_rid', $catRid)
                ->orderby('post_rid', 'desc')
                ->get()->toArray();

            return view('client.pages.posts', compact('categories', 'posts', 'currentCat'));
        }
        if ($type == 2) {
            $articles = Article::with('author')
                ->where('status', 1)
                ->where('cat_rid', $catRid)
                ->orderby('article_rid', 'desc')
                ->get();

            return view('client.pages.article-list', compact('categories', 'articles', 'currentCat'));
        }
    }

    public function getArticle($catName, $articleRid)
    {

        $categories = CommonFunctions::getCategories();
        $article = Article::find($articleRid);
        $currentCat = Category::find($article->cat_rid);

        return view('client.pages.article', compact('categories', 'article', 'currentCat'));
    }
}
