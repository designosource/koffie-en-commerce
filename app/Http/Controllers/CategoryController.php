<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category($id){

        $category = DB::table('tbl_category')
            ->where('category_id', $id)
            ->first();

        $videos = DB::table('tbl_video')
            ->select('*')
            ->join('tbl_category', 'tbl_video.video_category_id' ,'=', 'tbl_category.category_id')
            ->where('category_id','=', $id)
            ->get();


        return view('category/index',[
            'category' => $category,
            'videos' => $videos
        ]);
    }

    public function subcategory($id){

        $videos = DB::table('tbl_video')
            ->select('*')
            ->join('tbl_category', 'tbl_video.video_category_id' ,'=', 'tbl_category.category_id')
            ->join('tbl_subcategory', 'tbl_category.subcategory_id' ,'=', 'tbl_subcategory.subcategory_id')
            ->where('subcategory_id','=', $id)
            ->get();

        return view('category/index',[
            'videos' => $videos
        ]);
    }
}
