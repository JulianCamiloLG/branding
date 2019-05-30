<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mail2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        Mail::send(['text'=>'mail'], ['data' =>$data], function($message) use ($data) {
            $message->to('juliancamy.81@gmail.com', $data['content'])->subject
               ($data['subject']);
            $message->from($data['emailFrom'],$data['name']);
         });

        //$to = 'juliancamy.81@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        //$email_subject = $subject;
        //$email_body = $content;
        //$headers = "From: $emailFrom"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        //$headers .= "Reply-To: $emailFrom";	
        //mail($to,$email_subject,$email_body,$headers);
        return Redirect::to('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
