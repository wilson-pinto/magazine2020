<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($catName, $catRid, $type)
    {
        $currentCat = Category::find($catRid);

        $categories = Category::withCount(['post' => function ($post) {
            $post->where('status', 1);
        }])
            ->withCount(['article' => function ($article) {
                $article->where('status', 1);
            }])
            ->get();

        if ($type == 1) {
            $posts = Post::with('author')
                ->where('status', 1)
                ->where('cat_rid', $catRid)
                ->orderby('post_rid', 'desc')
                ->get()->toArray();

            return view('client.pages.posts', compact('categories', 'posts', 'currentCat'));
        }
        if ($type == 2) {
            $articles = Article::with('author')
                ->where('status', 1)
                ->orderby('article_rid', 'desc')
                ->get();

            return view('client.pages.article-list', compact('categories', 'articles', 'currentCat'));
        }
    }
}
