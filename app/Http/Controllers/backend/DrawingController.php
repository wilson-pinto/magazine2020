<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DrawingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.drawings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::where('status', 1)->get();
        return view('admin.drawings.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'postImg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return back()->withErrors($validator->errors());
            // return Redirect::back()->withInput(Input::all());
        }

        try {
            $postImg =  time() . '_' .  $request->postImg->getClientOriginalName();
            request()->postImg->move(public_path('img/drawings/'), $postImg);
        } catch (Exception $e) {
            // echo 'Message: ' . $e->getMessage();
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }

        $post = new Post();
        $post->title = $request->input('title');
        $post->author_rid = $request->input('author');
        $post->img_url = $postImg;
        $post->cat_rid = 1;
        $post->status = $request->input('status') ? 1 : 0;

        $post->save();

        // Session::flash('message', 'Form submitted successfully!');
        return Redirect::to('/admin/drawings')->with('message', 'Record Created Successfully!!!');
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
        $post = Post::find($id);
        $authors = Author::where('status', 1)->get();
        return view('admin.drawings.create', compact('authors', 'post'));
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

        $post = Post::find($id);

        if ($request->hasFile('postImg')) {
            $postImg =  time() . '_' .  $request->postImg->getClientOriginalName();
            request()->postImg->move(public_path('img/drawings/'), $postImg);
            $post->img_url = $postImg;
        }

        $post->title = $request->input('title');
        $post->author_rid = $request->input('author');
        $post->cat_rid = 1;
        $post->status = $request->input('status') ? 1 : 0;
        $post->save();

        return Redirect::to('/admin/drawings')->with('message', 'Record Updated Successfully!!!');
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
        $posts = Post::with('author')
            ->where('cat_rid', 1)
            ->get();

        return view('admin.drawings.table', compact('posts'));
    }
}
