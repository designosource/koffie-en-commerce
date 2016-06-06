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

class SpeakerController extends Controller
{
    public function index(Request $req){

        // Get all video's
        $videos = \App\Entity\Speaker::all();

        return view('admin/video/index',[
            'videos' => $videos,
            'user' => Auth::user()
        ]);
    }

    public function edit($id){

        // Get video
        $video = \App\Entity\Speaker::find($id);

        if(!$video) {
            throw new \Exception('Speaker does not exist.');
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
            'action' => array('admin_videos_edit', $video->id)
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
            $video = \App\Entity\Speaker::find($id);

            if(!$video) {
                throw new \Exception('Speaker does not exist.');
            }

            // Update
            $video->title = Input::get('title');
            $video->slug = Input::get('slug');
            $video->vimeo = Input::get('vimeo');
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
            return Redirect::to('admin/videos/' . $id . '/edit');
        }
    }

    public function create() {
        // Get video
        $video = new \App\Entity\Speaker();

        // Get categories for checbkox
        $categories = \App\Entity\Category::all();

        // Get speakers vor dropdown box
        $speakerList = \App\Entity\Speaker::pluck('name', 'id');

        return view('admin/video/createOrUpdate',[
            'video' => $video,
            'categories' => $categories,
            'speakerList' => $speakerList,
            'action' => array('admin_videos_store')
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
            $video = new \App\Entity\Speaker();

            // Store
            $video->title = Input::get('title');
            $video->slug = Input::get('slug');
            $video->vimeo = Input::get('vimeo');
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
        $video = \App\Entity\Speaker::find($id);
        $video->delete();

        return Redirect::to('admin/videos');
    }
}
