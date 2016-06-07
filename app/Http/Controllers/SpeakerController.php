<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SpeakerController extends Controller
{
    public function detail($id){
        $speaker = \App\Entity\Speaker::find($id);

        $top_video = $speaker->videos->first(); //TODO INTEGRATE VIEW COUNT
        
        $all_videos = $speaker->videos;

        return view('speaker/detail',[
            'speaker' => $speaker,
            'top_video' => $top_video,
            'all_videos' => $all_videos
        ]);
    }

}
