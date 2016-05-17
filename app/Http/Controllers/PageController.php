<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index(){

    	$categories = \App\Entity\Category::all();

    	return view('index',[
    		'categories' => $categories
    	]);
    }
}
