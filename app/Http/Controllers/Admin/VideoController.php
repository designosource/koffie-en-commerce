<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Html;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class VideoController extends Controller
{
    // HELPER
    private function getVimeoThumb($id) {
        $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/" . $id . ".php"));
        return $hash[0]['thumbnail_large']; 
    }

    public function index(Request $req){

        // Get all video's
        $videos = \App\Entity\Video::all();

        return view('admin/video/index',[
            'videos' => $videos,
            'user' => Auth::user()
        ]);
    }

    public function edit($id){

        // Get video
        $video = \App\Entity\Video::find($id);

        if(!$video) {
            throw new \Exception('Video does not exist.');
        }

        // Get categories for dropdown
        $categories = \App\Entity\Category::all();

        // Get speakers vor dropdown box
        $speakerList = \App\Entity\Speaker::pluck('name', 'id');

        return view('admin/video/createOrUpdate',[
            'video' => $video,
            'speaker' => $video->speaker,
            'categories' => $categories,
            'speakerList' => $speakerList,
            'action' => array('admin_videos_edit', $video->id),
            'title' => 'Edit -'
        ]);
    }

    public function update($id){

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'slug'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/videos/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $video = \App\Entity\Video::find($id);

            if(!$video) {
                throw new \Exception('Video does not exist.');
            }

            // Update
            $video->title = Input::get('title');
            $video->slug = Input::get('slug');
            $video->vimeo = Input::get('vimeo');
            $video->short_description = Input::get('short_description');
            $video->long_description = Input::get('long_description');
            $video->vimeo_thumb = $this->getVimeoThumb($video->vimeo);
            $video->speaker_id = Input::get('speaker');
            $video->save();

            $categories = [];
            if(Input::get('categories')) {
                $categories = Input::get('categories');
            }
            $video->categories()->sync($categories);

            // redirect
            Session::flash('message', 'Successfully updated video');
            return Redirect::to('admin/videos/' . $id . '/edit');
        }
    }

    public function create() {
        // Get video
        $video = new \App\Entity\Video();

        // Get categories for checbkox
        $categories = \App\Entity\Category::all();

        // Get speakers vor dropdown box
        $speakerList = \App\Entity\Speaker::pluck('name', 'id');

        return view('admin/video/createOrUpdate',[
            'video' => $video,
            'categories' => $categories,
            'speakerList' => $speakerList,
            'action' => array('admin_videos_store'),
            'title' => 'Nieuwe Video'
        ]);
    }

    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'slug'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/videos/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $video = new \App\Entity\Video();

            // Store
            $video->title = Input::get('title');
            $video->slug = Input::get('slug');
            $video->vimeo = Input::get('vimeo');
            $video->short_description = Input::get('short_description');
            $video->long_description = Input::get('long_description');
            $video->vimeo_thumb = $this->getVimeoThumb($video->vimeo);
            $video->speaker_id = Input::get('speaker');
            $video->save();

            $categories = [];
            if(Input::get('categories')) {
                $categories = Input::get('categories');
            }
            $video->categories()->sync($categories);

            // redirect
            Session::flash('message', 'Successfully updated video!');
            return Redirect::to('admin/videos/' . $video->id . '/edit');
        }
    }

    public function destroy($id) {
        // store
        $video = \App\Entity\Video::find($id);
        $video->delete();

        return Redirect::to('admin/videos');
    }
}
