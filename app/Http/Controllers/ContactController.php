<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::send('emails.users',[
            'message' => $request->message
        ],function($mail) use($request){
            $mail->from($request->email,$request->name);

            $mail->to('ayoub77427@gmail.com')->subject('testing laravel email');
        });
        //dd(env('MAIL_HOST'));
        return redirect()->back()->with('flash_message','thank you for your msg');
    }
}
