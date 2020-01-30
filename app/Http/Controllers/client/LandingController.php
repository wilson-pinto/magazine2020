<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
}
