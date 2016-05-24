<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category($slug) {

        $category = \App\Entity\Category::where('slug' , '=', $slug)->first();

        // Categorie bestaat niet --> opvangen in front-end
        if(!$category) {
            throw new \Exception('Category does not exist.');
        }

        // Get all categories
        // IMPROV : use this object to fetch the specific category from it
        // PRO : -1 query to db
        $categories = \App\Entity\Category::All();
        $videos = \App\Entity\Video::All();

        return view('category/index',[
            'categories' => $categories,
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
