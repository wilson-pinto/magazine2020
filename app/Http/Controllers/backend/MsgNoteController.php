<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\DataDictionary;
use App\Models\MsgNoteReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MsgNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.msg-notes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = DataDictionary::where('dd_type', 2)->get();
        return view('admin.msg-notes.create', compact('types'));
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
            request()->postImg->move(public_path('img/msg-report/'), $postImg);
        } catch (Exception $e) {
            // echo 'Message: ' . $e->getMessage();
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
        $report = new MsgNoteReport();
        $report->title = $request->input('title');
        $report->author = $request->input('author');
        $report->img_url = $postImg;
        $report->bio = $request->input('bio');
        $report->body = $request->input('editor');
        $report->display_order = $request->input('dOrder');
        $report->type = $request->input('type');
        $report->status = $request->input('status') ? 1 : 0;
        $report->save();

        return Redirect::to('/admin/msg-notes')->with('message', 'Record Created Successfully!!!');
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
        $types = DataDictionary::where('dd_type', 2)->get();
        $report = MsgNoteReport::find($id);
        return view('admin.msg-notes.create', compact('report', 'types'));
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
        $report = MsgNoteReport::find($id);

        if ($request->hasFile('postImg')) {
            $postImg =  time() . '_' .  $request->postImg->getClientOriginalName();
            request()->postImg->move(public_path('img/msg-report/'), $postImg);
            $report->img_url = $postImg;
        }


        $report->title = $request->input('title');
        $report->author = $request->input('author');
        $report->bio = $request->input('bio');
        $report->body = $request->input('editor');
        $report->display_order = $request->input('dOrder');
        $report->type = $request->input('type');
        $report->status = $request->input('status') ? 1 : 0;
        $report->save();
        return Redirect::to('/admin/msg-notes')->with('message', 'Record Updated Successfully!!!');
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
        $reports = MsgNoteReport::whereNotIn('type', [1])
            ->get();

        return view('admin.msg-notes.table', compact('reports'));
    }
}
