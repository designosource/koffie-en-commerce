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
        $video = \App\Entity\Video::where('slug','=', $slug)->get();
        $videosSpeaker = \App\Entity\Video::where('speaker_id','=', $video[0]->speaker_id)->where("id","<>", $video[0]->id)->limit(3)->get();

        return view('video/detail',[
            'video' => $video[0],
            'videosSpeaker' => $videosSpeaker,
            'speaker' => $video[0]->speaker,
        ]);
    }
}
