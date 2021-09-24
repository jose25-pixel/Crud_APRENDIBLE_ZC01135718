<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class msscontroller extends Controller
{
       public function store(){
          request()->validate([

'name'=>'required',
'email'=>'required|email',
'subject'=>'required|',
'content'=>'required|min:3'


          ]);

          Mail::to('josezavaletac94@gmail.com')->send(new MessageReceived);
          return back()->with('status','Recivimos tu mensaje, te reponderemos en menos de 24 horas.');

    } //
}
