<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;

class MailHelper
{
    public static function sendVerification($user){
        $data = ['code' => $user->verification];
        Mail::send('mail.index', $data, function ($message) use ($user){
            $message->from('info@paystoyou.online', 'Pays To You');
            $message->to($user->email, $user->name)
            ->subject('Email Verification');
        });
    }
    
    public static function send($Message,$email){
        $data['text'] = $email->message;
        $data['name'] = $Message->name;
        $data['email'] = $Message->email;
        $data['subject'] = $Message->subject;
        $data['message'] = $Message->message;
        Mail::send('admin.mail.index', ['data' => $data], function ($message) use ($Message){
            $message->from('info@paystoyou.online', 'Pays To You');
            $message->to($Message->email, $Message->name)
            ->subject('Reply from Support');
        });
    }

}
