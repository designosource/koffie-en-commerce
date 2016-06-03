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

        if(!$video) {
            throw new \Exception('Video bestaat niet');
        }

        return view('video/detail',[
            'video' => $video
        ]);
    }
}
