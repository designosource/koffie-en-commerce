<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SpeakerController extends Controller
{
    public function detail($id){
        $speaker= \App\Entity\Speaker::find($id);
        return view('speaker/detail',[
            'speaker' => $speaker
        ]);
    }

}
