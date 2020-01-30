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
        if ($type == 1) {
            $posts = Post::with('author')
                ->where('status', 1)
                ->orderby('post_rid', 'desc')
                ->get();

            $categories = Category::withCount(['post' => function ($post) {
                $post->where('status', 0);
            }])
                ->get();

            return view('client.pages.posts', compact('categories', 'posts', 'currentCat'));
        }
        if ($type == 2) {
            $articles = Article::with('author')
                ->where('status', 1)
                ->orderby('article_rid', 'desc')
                ->get();

            $categories =      Category::withCount(['article' => function ($post) {
                $post->where('status', 0);
            }])
                ->get();
            return view('client.pages.article-list', compact('categories', 'articles', 'currentCat'));
        }
    }
}
