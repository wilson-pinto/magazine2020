<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\DataDictionary;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galTypes = DataDictionary::where('dd_type', 1)->get();

        return view('admin.gallery.create', compact('galTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('type') != "1") {
            $validator = Validator::make($request->all(), [
                'galImg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',
            ]);
            if ($validator->fails()) {
                Session::flash('error', $validator->messages()->first());
                return back()->withErrors($validator->errors());
                // return Redirect::back()->withInput(Input::all());
            }

            try {
                $galImg =  time() . '_' .  $request->galImg->getClientOriginalName();
                request()->galImg->move(public_path('img/gallery/'), $galImg);
            } catch (Exception $e) {
                // echo 'Message: ' . $e->getMessage();
                return redirect()->back()->withErrors($e->getMessage())->withInput();
            }
        } else {
            $galImg = $request->input('url');
        }

        $gal = new Gallery();
        $gal->desc = $request->input('title');
        $gal->type = $request->input('type');
        $gal->url = $galImg;
        $gal->status = $request->input('status') ? 1 : 0;

        $gal->save();

        return Redirect::to('/admin/gallery')->with('message', 'Record Created Successfully!!!');
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
        $gallery = Gallery::find($id);
        $galTypes = DataDictionary::where('dd_type', 1)->get();
        return view('admin.gallery.create', compact('gallery', 'galTypes'));
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
        $gal = Gallery::find($id);
        if ($request->input('type') != "1") {
            if ($request->hasFile('galImg')) {
                $galImg =  time() . '_' .  $request->galImg->getClientOriginalName();
                request()->galImg->move(public_path('img/gallery/'), $galImg);
                $gal->url = $galImg;
            }
        } else {
            $gal->url = $request->input('url');
        }

        $gal->desc = $request->input('title');
        $gal->type = $request->input('type');
        $gal->status = $request->input('status') ? 1 : 0;

        $gal->save();

        return Redirect::to('/admin/gallery')->with('message', 'Record Updated Successfully!!!');
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
        $gallery = Gallery::all();

        return view('admin.gallery.table', compact('gallery'));
    }
}
