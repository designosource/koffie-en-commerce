<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Html;
use DB;
use SEOMeta;
use OpenGraph;
use Twitter;
use SEO;
use App\Http\Requests;

class VideoController extends Controller
{
    public function index(Request $req){

        // Get all video's
        $videos = \App\Entity\Video::all();

        // get all categories
        $categories = \App\Entity\Category::all();

        return view('video/index',[
            'videos' => $videos,
            'categories' => $categories
        ]);
    }

    public function detail($slug){

        // Get video
        $video = \App\Entity\Video::where('slug','=', $slug)->first();
        //dd($video->categories);
        $uri = url()->current();
        if(!$video) {
            throw new \Exception('Video bestaat niet');
        }

        SEOMeta::setTitle($video->title);
        SEOMeta::setDescription($video->short_description);
        SEOMeta::addMeta('article:published_time', $video->updated_at->toW3CString(), 'property');

        OpenGraph::setDescription($video->short_description);
        OpenGraph::setTitle($video->title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'video');

        OpenGraph::addImage($video->vimeo_thumb);

        return view('video/detail',[
            'video' => $video,
            'uri' => $uri
        ]);
    }
}
