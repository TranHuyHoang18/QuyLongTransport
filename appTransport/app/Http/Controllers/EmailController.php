<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $data = array('name'=>"cc cc kk");


        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('tranhuyhoang358@gmail.com', 'avc')->subject
            ('Laravel Basic Testing Mail');
            $message->from('tranhuyhoang8352@gmail.com','Tran Huy Hoang');
        });
        echo"a";
        exit();
        echo "Basic Email Sent. Check your inbox.";
    }
}
