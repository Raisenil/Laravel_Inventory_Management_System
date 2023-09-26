<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Contact;

class ContactController extends Controller
{
    public function Contact(){
        return view('frontend.contact');
    }

    public function StoreMessage(Request $request){
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at'=> Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Your Message Submitted Successfully',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }
}
