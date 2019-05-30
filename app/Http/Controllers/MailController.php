<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MensajesRecibidos;
use Mail;

class MailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user=$request->input('name');
        $emailFrom=$request->input('email');
        $subject=$request->input('subject');
        $content=$request->input('content');
        $data = array('name'=>$user,
                       'emailFrom'=>$emailFrom,
                       'subject'=>$subject,
                       'content'=>$content
                     );
        //$data=array('content'=>$content);
        /**
         * 
         */
        Mail::send('email.email', $data, function($message) use ($user,$emailFrom,$subject) {
            $message->to('julian.1701310061@ucaldas.edu.co', 'JULIAN CAMILO LOPEZ GIRALDO')
                    ->subject($subject);
            $message->from($emailFrom,$user);
        });
        return redirect("contact")->with('success','Correo enviado con exito');
    }
}
