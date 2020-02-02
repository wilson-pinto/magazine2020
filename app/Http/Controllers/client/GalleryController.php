<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\DataDictionary;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($galType, $galTypeId)
    {
        $galCats = DataDictionary::where('dd_type', 1)
            ->get();
        $currentGalType = DataDictionary::find($galTypeId);
        $gallery = Gallery::where('type', $galTypeId)
            ->where('status', 1)
            ->get()->toArray();

        return view('client.pages.gallery', compact('gallery', 'currentGalType', 'galCats'));
    }
}
