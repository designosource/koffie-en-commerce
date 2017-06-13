<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    public function index(){
        $skip = 3;
    	$categories_start = \App\Entity\Category::where('parent_id', '=', null)->get()->take($skip);

        $limit = \App\Entity\Category::count() - $skip;
        $categories_end = \App\Entity\Category::where('parent_id', '=', null)->skip($skip)->take($limit)->get();

        $quote = \App\Entity\Quote::orderByRaw("RAND()")->first();

    	return view('index',[
    		'categories_start' => $categories_start,
            'categories_end' => $categories_end,
            'quote' => $quote
    	]);
    }

    public function about() {
        return view('page.about');
    }

    public function contact() {
        return view('page.contact', ['errors' => []]);
    }
    public function mailContact(ContactFormRequest $request) {

        \Mail::send('emails.contact',
            array(
                'voornaam' => $request->get('voornaam'),
                'naam' => $request->get('naam'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('info@memori.be');
                $message->to('lpoignonnec@gmail.com', 'Admin')->subject('Contact Koffie & Commerce');
            });
        return redirect('contact')->with('message', 'Bedankt om contact op te nemen met Koffie & Commerce. Wij nemen spoedig contact op.');

    }
}
