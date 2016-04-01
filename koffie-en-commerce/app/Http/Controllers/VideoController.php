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
        
        $data = DB::table('tbl_video')
            ->where('video_id', $id)
            ->first();
        $speaker = DB::table('tbl_video')
            ->select('*')
            ->where('speaker_video_id', 2)
            ->join('tbl_speaker','tbl_speaker.speaker_id','=', 'tbl_video.video_id')
            ->first();
        $category = DB::table('tbl_category')
            ->select('*')
            ->first();

        return view('video/detail',[
            'data' => $data,
            'speaker' => $speaker,
            'category' => $category,
        ]);
    }
}
