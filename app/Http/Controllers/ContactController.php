<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function getContact(){
       return view('contact');
    }

    public function postContact(Request $request){
        //dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required|min:10',
            'subject' => 'required|min:3',
        ]);

        $data = array(
            'email' => $request->email,
            'bodyMessage' => $request->message,
            'subject' => $request->subject,
        );

        Mail::send('email.contact', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('nataprawiraf@gmail.com');
            $message->subject($data['subject']);
        });
    }
}
