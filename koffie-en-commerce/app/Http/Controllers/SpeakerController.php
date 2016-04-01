<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SpeakerController extends Controller
{
    public function detail($id){
        $data = $id;
        return view('speaker/detail',[
            'data' => $data
        ]);
    }

}
