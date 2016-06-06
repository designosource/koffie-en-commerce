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

        // Get all speaker's
        $speakers = \App\Entity\Speaker::all();

        return view('admin/speaker/index',[
            'speakers' => $speakers,
            'user' => Auth::user()
        ]);
    }

    public function edit($id){

        // Get speaker
        $speaker = \App\Entity\Speaker::find($id);

        if(!$speaker) {
            throw new \Exception('Speaker does not exist.');
        }

        // Get categories for dropdown
        $categories = \App\Entity\Category::all();

        // Get speakers vor dropdown box
        $speakerList = \App\Entity\Speaker::pluck('name', 'id');

        return view('admin/speaker/createOrUpdate',[
            'speaker' => $speaker,
            'action' => array('admin_speakers_edit', $speaker->id)
        ]);
    }

    public function update($id){

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/sprekers/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $speaker = \App\Entity\Speaker::find($id);

            if(!$speaker) {
                throw new \Exception('Speaker does not exist.');
            }

            if(Input::file('avatar')) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('avatar')->getClientOriginalExtension(); // getting image2wbmp(image) extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('avatar')->move($destinationPath, $fileName); // uploading file to given path

                $speaker->avatar = $fileName;
            }
            

            // Update
            $speaker->name = Input::get('name');
            $speaker->title = Input::get('title');
            $speaker->email = Input::get('email');
            $speaker->short_description = Input::get('short_description');
            $speaker->long_description = Input::get('long_description');
            $speaker->save();

            // redirect
            Session::flash('message', 'Successfully updated speaker!');
            return Redirect::to('admin/sprekers/' . $id . '/edit');
        }
    }

    public function create() {
        // Get speaker
        $speaker = new \App\Entity\Speaker();

        return view('admin/speaker/createOrUpdate',[
            'speaker' => $speaker,
            'action' => array('admin_speakers_store')
        ]);
    }

    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/sprekers/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $speaker = new \App\Entity\Speaker();

            if(Input::file('avatar')) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('avatar')->getClientOriginalExtension(); // getting image2wbmp(image) extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('avatar')->move($destinationPath, $fileName); // uploading file to given path

                $speaker->avatar = $fileName;
            }
            

            // Update
            $speaker->name = Input::get('name');
            $speaker->title = Input::get('title');
            $speaker->email = Input::get('email');
            $speaker->short_description = Input::get('short_description');
            $speaker->long_description = Input::get('long_description');
            $speaker->save();

            // redirect
            Session::flash('message', 'Successfully updated speaker!');
            return Redirect::to('admin/sprekers/' . $speaker->id . '/edit');
        }
    }

    public function destroy($id) {
        // store
        $speaker = \App\Entity\Speaker::find($id);
        $speaker->delete();

        return Redirect::to('admin/sprekers');
    }
}
