<?php

namespace App\Http\Controllers;

use App\Mail\SampleFile;
use Illuminate\Http\Request;
use Mail;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

public function about(){
    return view('about');
}

public function service(){
    return view('service');
}

public function portfolio(){
    return view('portfolio');
}


public function contact(){
    return view('contact');
}
public function landingpage(){
    return view('landingpage');
}
public function web(){
    return view('web');
}
public function app(){
    return view('app');
}
public function search(){
    return view('search');
}
public function social(){
    return view('social');
}
public function webdesign(){
    return view('webdesign');
}
public function videoediting(){
    return view('videoediting');
}
public function graphic(){
    return view('graphic');
}
public function sass(){
    return view('sass');
}
public function content(){
    return view('content');
}
public function booktranslate(){
    return view('booktranslate');
}
public function software(){
    return view('software');
}

public function sendEmail(Request $request)
{

$details = [
 'first name' =>$request->firstname,
 'last name' =>$request->lastname,
 'phone' =>$request->phone,
 'email' =>$request->email,
 'subject' =>$request->subject,
 'message' =>$request->message,
];
Mail::to('shehroz.smtek@gmail.com')->send(new SampleFile($details));
return back()->with('message_sent','Your Email has been sent successfully');

}





}
