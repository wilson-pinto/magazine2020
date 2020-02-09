<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DataDictionary;
use App\Models\MsgNoteReport;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('client.pages.landing-page', compact('categories'));
    }

    public static function getCats()
    {
        return Category::all();
    }

    public static function getGalCats()
    {
        return DataDictionary::where('dd_type', 1)
            ->get();
    }

    public static function getReports()
    {
        return MsgNoteReport::where('status', 1)
            ->get();
    }
}
