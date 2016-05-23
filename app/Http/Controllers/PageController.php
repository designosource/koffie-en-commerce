<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index(){

    	$categories_start = \App\Entity\Category::all()->take(2);

        $skip = 2;
        $limit = \App\Entity\Category::count() - $skip;
        $categories_end = \App\Entity\Category::skip($skip)->take($limit)->get();

    	return view('index',[
    		'categories_start' => $categories_start,
            'categories_end' => $categories_end
    	]);
    }
}
