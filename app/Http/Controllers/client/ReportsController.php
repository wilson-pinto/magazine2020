<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\MsgNoteReport;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index($reportTitle, $reportRid)
    {
        $report = MsgNoteReport::find($reportRid);
        $reports = MsgNoteReport::where('status', 1)
            ->get();
        return view('client.pages.reports', compact('report', 'reports'));
    }
}
