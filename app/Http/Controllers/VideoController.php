<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Html;
use DB;

use App\Http\Requests;

class VideoController extends Controller
{
    public function index(Request $req){

        // Get all video's
        $videos = \App\Entity\Video::all();

        // get all categories
        $categories = \App\Entity\Category::all();

        return view('video/index',[
            'videos' => $videos,
            'categories' => $categories
        ]);
    }

    public function detail($slug){

        // Get video
        $video = \App\Entity\Video::where('slug','=', $slug)->first();

        return view('video/detail',[
            'video' => $video,
            'speaker' => $video->speaker
        ]);
    }

    public function category($slug) {

        $category = \App\Entity\Category::where('slug' , '=', $slug)->first();

        // Categorie bestaat niet --> opvangen in front-end
        if(!$category) {
            throw new \Exception('Category does not exist.');
        }


        // Get all categories
        $categories = \App\Entity\Category::All();

        return view('video/index',[
            'categories' => $categories,
            'videos' => $category->videos
        ]);
    }
}
