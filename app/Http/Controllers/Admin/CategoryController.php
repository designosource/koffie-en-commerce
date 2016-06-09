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

class CategoryController extends Controller
{
    public function index(Request $req){

        // Get all video's
        $categories = \App\Entity\Category::all();

        return view('admin/category/index',[
            'categories' => $categories,
            'user' => Auth::user()
        ]);
    }

    public function edit($id){

        // Get video
        $category = \App\Entity\Category::find($id);

        if(!$category) {
            throw new \Exception('Category does not exist.');
        }

        return view('admin/category/createOrUpdate',[
            'category' => $category,
            'action' => array('admin_categories_edit', $category->id),
            'title' => 'Edit -'
        ]);
    }

    public function update($id){

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'slug'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/categorieen/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $category = \App\Entity\Category::find($id);

            if(!$category) {
                throw new \Exception('Category does not exist.');
            }

            if (Input::file('image')) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image2wbmp(image) extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                $category->image = $fileName;
            }

            // Store
            $category->name = Input::get('name');
            $category->slug = Input::get('slug');
            $category->description = Input::get('description');
            $category->save();

            // redirect
            Session::flash('message', 'Successfully updated category!');
            return Redirect::to('admin/categorieen/' . $category->id . '/edit');
        }
    }

    public function create() {
        // Get video
        $category = new \App\Entity\Category();

        // Get categories for checbkox
        $categories = \App\Entity\Category::all();

        // Get speakers vor dropdown box
        $speakerList = \App\Entity\Speaker::pluck('name', 'id');

        return view('admin/category/createOrUpdate',[
            'category' => $category,
            'categories' => $categories,
            'speakerList' => $speakerList,
            'action' => array('admin_categories_store'),
            'title' => 'Nieuwe Categorie'
        ]);
    }

    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'slug'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/categorieen/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {

            $fileName = null;
            if(Input::file('image')) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image2wbmp(image) extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
            }

            // store
            $category = new \App\Entity\Category();

            // Store
            $category->name = Input::get('name');
            $category->slug = Input::get('slug');
            $category->description = Input::get('description');
            if($fileName) {
                $category->image = $fileName;
            }
            $category->save();

            // redirect
            Session::flash('message', 'Successfully updated video!');
            return Redirect::to('admin/categorieen/' . $category->id . '/edit');
        }
    }

    public function destroy($id) {
        // store
        $video = \App\Entity\Category::find($id);
        $video->delete();

        return Redirect::to('admin/categorieen');
    }
}
