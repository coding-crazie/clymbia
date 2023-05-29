<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact()
    {
        return view('home');
    }
    public function sendEmail(Request $request){
        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'msg'=>$request->msg,
        ];
        Mail::to('support@clymbia.com.com')->send(new ContactMail($details));
        return back()->with('status','Message has been send successfully');
    }
}
