<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;
use Mail;

class DashboardController extends Controller
{
    // return the index page
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        //
    }

    // download resume to users screen
    public function resume(Request $request)
    {
        $pdf    = new Pdf;
        $resume = view('pdf.resume');

        return view('pdf.resume');
    }

    // send the contact form details
    public function contact_send(Request $request)
    {
        $data = request()->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'comments'  => 'required'
        ]);

        $email    = $request->email;
        $name     = $request->name;
        $comments = $request->comments;

        Mail::send('email.index',['name' => $name, 'email' => $email, 'comments' => $comments], function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('jakerichardson13@googlemail.com')->subject('Testing');
        });

        $mailTo  = "jakerichardson13@googlemail.com";
        $headers = "From: ".$email;
        $text    = "You have received an email from ".$name.".\n\n".$comments;

        return response()->json('Your email has been sent');
    }

}
