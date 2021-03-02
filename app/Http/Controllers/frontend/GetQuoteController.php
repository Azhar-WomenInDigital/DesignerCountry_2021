<?php

namespace App\Http\Controllers\frontend;
use App\Models\GetQuote;
use App\Mail\GetQuoteMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class GetQuoteController extends Controller
{
    public function getQuote(){
        return view('frontend.get_quote');
    }

    public function storeQuote(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'quantity' => 'required',
            'details_instraction' => 'required',
            'sellection' => 'required',
        ]);

        if($request->hasAny(['clipping_path','multi_clipping_path','image_masking','photo_retouching','ghost_mannequin','dropdown_shadow','reflection_shadow','color_variants','vactor_convartion','brightness_enhencement','ecomerce_image_editing','image_restarted']))
        {
            $data = GetQuote::create($request->all());
            Mail::to('azharraihan6969@gmail.com')->send(new GetQuoteMail($data));
            session(['name' => $data->name]);
            Toastr::success('Your Data Successfully Sent','Success');
            return redirect()->route('get.quote.upload');
        }else{
            $data = [
                'msg'=>'Please Select Atleast One Service',
                'name' => $request->name,
                'email' => $request->email,
                'quantity' => $request->quantity,
                'details_instraction' => $request->details_instraction
            ];
            Toastr::warning('Please Select Atleast One Service','warning');
            return redirect()->back()->with($data);
        }
    }
}
