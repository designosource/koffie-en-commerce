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
    public function showAll(Request $req){

        // Get all video's
        $videos = \App\Entity\Video::all();

        return view('admin/video/index',[
            'videos' => $videos,
            'user' => Auth::user()
        ]);
    }

    public function showEdit($id){

        // Get video
        $video = \App\Entity\Video::find($id);

        if(!$video) {
            throw new \Exception('Video does not exist.');
        }

        // Get categories for dropdown
        $categories = \App\Entity\Category::all();

        return view('admin/video/edit',[
            'video' => $video,
            'speaker' => $video->speaker,
            'categories' => $categories
        ]);
    }

    public function postEdit($id){

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
}
