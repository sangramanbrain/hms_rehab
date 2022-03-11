<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
   public function mail(request $request){     

        $data=['name'=>$request->form_name,'email'=>$request->form_email,'phone'=>$request->form_phone,'subject'=>$request->form_subject,'messages'=>$request->form_message];

    
        $user['to']='info@rehab-palliativehospital.com';

       Mail::send('mail.mail',$data,function($messages) use ($user){
        $messages->to($user['to']);
        $messages->subject('Customer Contacted Through Website');
       });


       $request->session()->flash("message","Thank You For Contacting Us");
     

        return redirect('/contact');

    }
}
