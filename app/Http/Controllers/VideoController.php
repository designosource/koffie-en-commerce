<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Html;
use DB;

use App\Http\Requests;

class VideoController extends Controller
{
    public function index(Request $req){
        // get the "?filter=x" portion of the URI
        $filter = $req->query();

        // $filter will be false if none found
        if (!$filter) {
            $data = DB::table('tbl_video')->get();
        }else{
            $data = DB::table('tbl_video')
                ->where('video_category_id', $filter)
                ->get();
        }

        // get all categories
        // Add where statement to exclude subcategories (if maincategory_id != null)
        $categories = DB::table('tbl_category')->get();
        
        return view('video/index',[
            'data' => $data,
            'categories' => $categories
        ]);
    }

    public function detail($id){

        // - - get video - -
        $data = DB::table('tbl_video')
            ->where('video_id', $id)
            ->first();

        // - - get speaker info and video from speaker - -
        $vidspeaker = DB::table('tbl_video')
            ->join('tbl_speaker','tbl_video.video_speaker_id','=', 'tbl_speaker.speaker_id')
            ->where('video_speaker_id', $data->video_speaker_id)
            ->orderBy('video_id', 'asc')
            ->get();

        $speaker = DB::table('tbl_speaker')
            ->where('speaker_id', $data->video_speaker_id)
            ->first();

        // - - get categories - -
        $category = DB::table('tbl_category')
            ->where('category_id',$data->video_category_id)
            ->first();

        return view('video/detail',[
            'data' => $data,
            'vidspeaker' => $vidspeaker,
            'speaker' => $speaker,
            'category' => $category,
        ]);
    }
}
