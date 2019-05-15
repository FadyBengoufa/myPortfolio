<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Mail\sendMail;

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

        $user = '';
       
        \Mail::send('emails.sendMail',[
            'msg'=>$request->message
        ],function($mail) use($request){
            $mail->from($request->email,$request->name);
            $mail->to('ayoub77427@gmail.com');
        });

        redirect()->back()->with('flash_message','Thank you I will reply when I can');
    }

}