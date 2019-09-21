<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailAdmin;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
//     //
  public  function send_mail (Request $request) {


    $email = $request->input('email');
        // dd($email);
        //original code incase the codes stops wokring revert to jscon encode
        // $admin_email = json_decode($email);
          //dd($admin_email);
        Mail::to($email)->send(new MailAdmin());
        return back()->with('success','Email sent successfully');

        // return 'A message has been sent to Mailtrap!';

    }


    public  function send_mail_to_kjk (Request $request) {


          Mail::to('info@kjk.africa')->send(new MailAdmin());
          return back()->with('success','Email sent successfully');
  
     
  
      }
  

}
