<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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
            'colFBH' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return back()->withErrors($validator->errors());
            // return Redirect::back()->withInput(Input::all());
        }

        try {
            $imageFBH = $request->colFBH->getClientOriginalName() . '_' . time() . '.' . request()->colFBH->getClientOriginalExtension();
            request()->colFBH->move(public_path('images'), $imageFBH);
        } catch (Exception $e) {
            // echo 'Message: ' . $e->getMessage();
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
        $Col = new Collection();
        $Col->col_name = $request->input('colName');

        $Col->display_order = $request->input('colDO');
        $Col->status = $request->input('colStatus') ? 1 : 0;
        $Col->banner_horizontal = $imageFBH;
        $Col->save();
        // redirect
        Session::flash('message', 'Successfully created Collection!');
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
        //
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
        $Col = Collection::find($id);
        if ($request->hasFile('colFBH')) {
            $imageFBH = request()->colFBH->getClientOriginalName() . '_' . time() . '.' . request()->colFBH->getClientOriginalExtension();
            $request->colFBH->move(public_path('images/collections'), $imageFBH);
            $Col->banner_horizontal = $imageFBH;
        }

        $Col->col_name = $request->input('colName');
        $Col->col_name_sub  = $request->input('colTag');
        $Col->col_title = $request->input('colTitle');
        $Col->col_description = $request->input('colDesc');
        $Col->col_second_title = $request->input('colSec');
        $Col->display_order = $request->input('colDO');
        $Col->status = $request->input('colStatus') ? 1 : 0;
        $Col->save();
        // redirect
        Session::flash('message', 'Successfully Saved Collection!');
        return Redirect::to('/admin/collections');
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
}
