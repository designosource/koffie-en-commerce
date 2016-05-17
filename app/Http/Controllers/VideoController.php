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
        $data = \App\Entity\Video::all();

        // get all categories
        // Add where statement to exclude subcategories (if maincategory_id != null)
        $categories = \App\Entity\Category::all();

        return view('video/index',[
            'data' => $data,
            'categories' => $categories
        ]);
    }

    public function detail($id){
        // get details off the video by id
        $video = \App\Entity\Video::where('id','=', $id)->first();

        $vidspeaker = \App\Entity\Video::where('speaker_id','=', $videos->speaker_id)->get();

        // - - get speaker info and video from speaker - -
        /*$vidspeaker = DB::table('tbl_video')
            ->join('tbl_speaker','tbl_video.video_speaker_id','=', 'tbl_speaker.speaker_id')
            ->where('video_speaker_id', $data->video_speaker_id)
            ->orderBy('video_id', 'asc')
            ->get();*/

        $speaker = \App\Entity\Speaker::where('id','=', $videos->speaker_id);
        /*$speaker = DB::table('tbl_speaker')
            ->where('speaker_id', $data->video_speaker_id)
            ->first();*/


        return view('video/detail',[
            'data' => $video,
            'vidspeaker' => $vidspeaker,
            'speaker' => $speaker,
        ]);
    }

    public function category($slug) {

        $category = \App\Entity\Category::where('name' , '=', $slug)->first();

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
