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

        // - - get speaker info and video from speaker- -
        $speaker = DB::table('tbl_video')
            ->select('*')
            ->join('tbl_speaker','tbl_video.video_speaker_id','=', 'tbl_speaker.speaker_id')
            ->where('video_id', $id)
            ->get();

        // - - get categories - -
        /*$category= DB::table('tbl_video')
            ->select('*')
            ->join('tbl_category', 'tbl_video.video_category_id' ,'=', 'tbl_category.category_id')
            ->join('tbl_subcategory', 'tbl_category.category_subcategory_id' ,'=', 'tbl_subcategory.subcategory_id')
            ->where('video_id','=', $id)
            ->get();*/

        return view('video/detail',[
            'data' => $data,
            'speaker' => $speaker,
            //'category' => $category,
        ]);
    }
}
