<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.author.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create');
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
            'authorImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return back()->withErrors($validator->errors());
            // return Redirect::back()->withInput(Input::all());
        }

        try {
            $authorImage =  time() . '_' .  $request->authorImage->getClientOriginalName();
            request()->authorImage->move(public_path('img/author/'), $authorImage);
        } catch (Exception $e) {
            // echo 'Message: ' . $e->getMessage();
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }

        $author = new Author();
        $author->name = $request->input('authorName');
        $author->profile_img = $authorImage;
        $author->branch = $request->input('branch');
        $author->year = $request->input('year');
        $author->type = $request->input('type');
        $author->status = $request->input('status') ? 1 : 0;

        $author->save();
        // redirect
        Session::flash('message', 'Form submitted successfully!');
        return Redirect::to('/admin/author');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::find($id);
        return view('admin.author.create', compact('author'));
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
        $author = Author::find($id);
        if ($request->hasFile('authorImage')) {
            $authorImage =  time() . '_' .  $request->authorImage->getClientOriginalName();
            request()->authorImage->move(public_path('img/author/'), $authorImage);
            $author->profile_img = $authorImage;
        }

        $author->name = $request->input('authorName');
        $author->branch = $request->input('branch');
        $author->year = $request->input('year');
        $author->type = $request->input('type');
        $author->status = $request->input('status') ? 1 : 0;

        $author->save();
        // redirect
        Session::flash('message', 'Form submitted successfully!');
        return Redirect::to('/admin/author');
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
        $authors = Author::all();
        return view('admin.author.table', compact('authors'));
    }
}
