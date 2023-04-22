<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailSendController extends Controller
{
    public function createMail() {
        return view('emails.create_mail',['text' =>'' ]);
    }
    public function sendMail(Request $request)
    {
        $email = $request->email;
        $subject = $request->subject;
        Mail::send('emails.mail_reserve', [
            'messagetext' => $request->mailtext,
        ], function ($message) use ($email, $subject) {
            $message->to($email)
                ->subject($subject);
        });
        return view('emails.create_mail',['text' => '送信完了']);
    }
}
