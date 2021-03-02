<?php

namespace App\Http\Controllers\frontend;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SubscriberController extends Controller
{
    public function subscriberStore(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:subscribers,email',
        ]);
        $subscribe = new Subscriber();
        $subscribe->email = $request->email;
        $subscribe->save();
        Toastr::success("You've successfully subscribed", 'Success');
        return redirect()->back();
    }
}
