<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return view('video/detail',[
            'data' => $data
        ]);
    }
}
