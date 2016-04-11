<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Html;
use DB;

use App\Http\Requests;

class VideoController extends Controller
{
    public function index(){
        $data = DB::table('tbl_video')->get();
        return view('video/index',[
            'data' => $data
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
        $category = DB::table('tbl_video')
            ->join('tbl_category','tbl_video.video_category_id', '=', 'tbl_category.category_id')
            ->where('video_id','=', $id)
            ->first();
        $subcategory = DB::table('tbl_subcategory')->get();

        return view('video/detail',[
            'data' => $data,
            'vidspeaker' => $vidspeaker,
            'speaker' => $speaker,
            'category' => $category,
            'subcategory' => $subcategory,
        ]);
    }
}
