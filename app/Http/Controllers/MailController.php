<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function send(){
       $objectDemo=new \stdClass();
       $objectDemo->receiver='mmizbasarov01@gmail.com';
       $objectDemo->sender='mmizbasarov01@gmail.com';
       Mail::to('mmizbasarov01@gmail.com')->send(new DemoEmail($objectDemo));
   }
}
