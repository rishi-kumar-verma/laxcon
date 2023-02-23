<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;
use App\Mail\sendingEmailToAdmin;

class EmailController extends Controller
{
    function index()
    {
        return view('sendaquery');
    }

    function send(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'country' => $request->country,
            'material' => $request->material,
            'message' => $request->message
        );
        $adminEmail = env('MAIL_FROM_ADDRESS');

        Mail::to($request->email)->send(new sendingEmail($data));
        Mail::to($adminEmail)->send(new sendingEmailToAdmin($data));
        return back()->with('success', 'Thanks for contacting us!');
    }

}