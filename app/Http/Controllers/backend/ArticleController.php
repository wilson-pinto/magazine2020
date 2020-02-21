<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::where('status', 1)->get();
        $categories = Category::where('type', 2)->get();
        return view('admin.article.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->author_rid = $request->input('author');
        $article->cat_rid = $request->input('category');
        $article->body = $request->input('editor');
        $article->status = $request->input('status') ? 1 : 0;

        $article->save();

        return Redirect::to('/admin/article')->with('message', 'Record Created Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $authors = Author::where('status', 1)->get();
        $categories = Category::where('type', 2)->get();
        return view('admin.article.create', compact('authors', 'categories', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->author_rid = $request->input('author');
        $article->cat_rid = $request->input('category');
        $article->body = $request->input('editor');
        $article->status = $request->input('status') ? 1 : 0;

        $article->save();

        return Redirect::to('/admin/article')->with('message', 'Record Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAll()
    {
        $articles = Article::with('author')
            ->with('category')
            ->orderby('article_rid', 'desc')
            ->get();

        return view('admin.article.table', compact('articles'));
    }
}
