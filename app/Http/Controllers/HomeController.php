<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){

    	$categories = DB::table('categories')
    		->get();

    	return view('index',[
    		'categories' => $categories
    	]);
    }
}
