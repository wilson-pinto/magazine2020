<?php

namespace App\Http\Controllers;

use App\Manager\CommonFunctions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = CommonFunctions::getCategories();

        $data = '{"labels":[';
        $count = 1;
        foreach ($categories as $cat) {
            $data = $data . '"' . $cat->name . '"';
            if ($count < count($categories)) {
                $data = $data . ',';
            }
            $count++;
        }
        $data = $data . '],"datasets": [{"label": "Contents","data": [';
        $count = 1;
        foreach ($categories as $cat) {
            $postCount =  $cat->type == 2 ? $cat->article_count : $cat->post_count;
            $data = $data .  '"' . $postCount . '"';
            if ($count < count($categories)) {
                $data = $data . ',';
            }
            $count++;
        }

        $data = $data . '],"backgroundColor": ["rgb(0, 63, 92)", "rgb(88, 80, 141)","rgb(188, 80, 144)","rgb(255, 99, 97)","rgb(255, 166, 0)"]}]}';
        // return $data;
        return view('admin.dashboard', compact('data'));
    }
}
