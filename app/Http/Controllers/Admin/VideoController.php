<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Html;

use App\Http\Requests;

class VideoController extends Controller
{
    public function index(Request $req){

        // Get all video's
        $videos = \App\Entity\Video::all();

        return view('admin/video/index',[
            'videos' => $videos
        ]);
    }

    public function edit($id){

        // Get video
        $video = \App\Entity\Video::find($id);

        if(!$video) {
            throw new \Exception('Video does not exist.');
        }

        // Get categories for dropdown
        $categories = \App\Entity\Category::lists('name', 'id');

        return view('admin/video/edit',[
            'video' => $video,
            'speaker' => $video->speaker,
            'categories' => $categories
        ]);
    }
}
