<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $to = 'antoine.goethuys@student.ehb.be';
        $subject = 'Contact Form Submission from ' . $name;
        $headers = 'From: ' . $email;

        mail($to, $subject, $message, $headers);

        return redirect('/contact')->with('status', 'Email sent successfully!');
    }
}
