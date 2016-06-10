<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index(){
        $skip = 3;
    	$categories_start = \App\Entity\Category::where('parent_id', '=', null)->get()->take($skip);

        $limit = \App\Entity\Category::count() - $skip;
        $categories_end = \App\Entity\Category::where('parent_id', '=', null)->skip($skip)->take($limit)->get();

        $quote = \App\Entity\Quote::orderByRaw("RAND()")->first();

    	return view('index',[
    		'categories_start' => $categories_start,
            'categories_end' => $categories_end,
            'quote' => $quote
    	]);
    }

    public function about() {
        return view('page.about');
    }

    public function contact() {
        return view('page.contact');
    }
}
