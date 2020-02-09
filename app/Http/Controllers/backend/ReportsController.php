<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MsgNoteReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $report = new MsgNoteReport();
        $report->title = $request->input('title');
        $report->author = $request->input('author');
        $report->bio = $request->input('bio');
        $report->body = $request->input('editor');
        $report->display_order = $request->input('dOrder');
        $report->type = 1;
        $report->status = $request->input('status') ? 1 : 0;
        $report->save();

        return Redirect::to('/admin/reports')->with('message', 'Record Created Successfully!!!');
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
        $report = MsgNoteReport::find($id);
        return view('admin.reports.create', compact('report'));
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
        $report->title = $request->input('title');
        $report->author = $request->input('author');
        $report->bio = $request->input('bio');
        $report->body = $request->input('editor');
        $report->display_order = $request->input('dOrder');
        $report->type = 1;
        $report->status = $request->input('status') ? 1 : 0;
        $report->save();
        return Redirect::to('/admin/reports')->with('message', 'Record Updated Successfully!!!');
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
        $reports = MsgNoteReport::where('type', 1)
            ->get();

        return view('admin.reports.table', compact('reports'));
    }
}
