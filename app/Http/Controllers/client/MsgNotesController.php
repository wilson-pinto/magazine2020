<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\MsgNoteReport;
use Illuminate\Http\Request;

class MsgNotesController extends Controller
{
    public function index($title, $rid, $type)
    {
        $object = MsgNoteReport::find($rid);
        $contents = MsgNoteReport::where('type', $type)
            ->where('status', 1)
            ->get();
        return view('client.pages.msg-reports', compact('object', 'contents'));
    }
}
