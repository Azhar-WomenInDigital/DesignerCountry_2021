<?php

namespace App\Http\Controllers\frontend;

use App\Mail\ContactMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactSend(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        Mail::to("azhar.womenindigital@gmail.com")->send(new ContactMail($contact));
        Toastr::success('Contact Successful','Success');
        return redirect()->back();

    }
}
