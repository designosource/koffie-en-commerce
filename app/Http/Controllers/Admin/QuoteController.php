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

class QuoteController extends Controller
{
    public function index(Request $req){

        // Get all quote's
        $quotes = \App\Entity\Quote::all();

        return view('admin/quote/index',[
            'quotes' => $quotes,
            'user' => Auth::user()
        ]);
    }

    public function edit($id){

        // Get quote
        $quote = \App\Entity\Quote::find($id);

        if(!$quote) {
            throw new \Exception('Quote does not exist.');
        }

        return view('admin/quote/createOrUpdate',[
            'quote' => $quote,
            'action' => array('admin_quotes_edit', $quote->id),
            'title' => 'Edit -'
        ]);
    }

    public function update($id){

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'quote'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/quotes/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $quote = \App\Entity\Quote::find($id);

            if(!$quote) {
                throw new \Exception('Quote does not exist.');
            }

            // Update
            $quote->quote = Input::get('quote');
            $quote->author = Input::get('author');
            $quote->save();

            // redirect
            Session::flash('message', 'Successfully updated quote!');
            return Redirect::to('admin/quotes/' . $id . '/edit');
        }
    }

    public function create() {
        // Get quote
        $quote = new \App\Entity\Quote();

        return view('admin/quote/createOrUpdate',[
            'quote' => $quote,
            'action' => array('admin_quotes_store'),
            'title' => 'Nieuw Citaat'
        ]);
    }

    public function store() {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'quote'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/quotes/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $quote = new \App\Entity\Quote();

            // Update
            $quote->quote = Input::get('quote');
            $quote->author = Input::get('author');
            $quote->save();

            // redirect
            Session::flash('message', 'Successfully updated quote!');
            return Redirect::to('admin/quotes/' . $quote->id . '/edit');
        }
    }

    public function destroy($id) {
        // store
        $quote = \App\Entity\Quote::find($id);
        $quote->delete();

        return Redirect::to('admin/quotes');
    }
}
