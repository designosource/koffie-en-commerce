<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
    	
    	$categories = DB::table('tbl_category')
    		->where('maincategory_id','') //if maincategory_id is empty, category is not a sub category
    		->get();

    	return view('index',[
    		'categories' => $categories
    	]);
    }
}
