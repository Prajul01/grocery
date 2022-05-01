<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\Suscribers;
use App\Models\Suscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;

class EmailController extends Controller
{
    public function create(){
//        $data['row']=Suscriber::find($id);


        return view('backend.email.create');
    }
    public function send(Request $request){
//        $toemail    =   $request->emailAddress;
//        $data       =   array(
//            "message"    =>   $request->message
//        );

        $data['mail'] = $request->except('_token');

 $toemail=Suscriber::all();
 foreach ($toemail as $ema) {
     Mail::to($ema->email)->send(new Suscribers($data['mail']));
 }

        return  redirect()->route('suscribers.index')->with('success','mail sent.');
    }
}
