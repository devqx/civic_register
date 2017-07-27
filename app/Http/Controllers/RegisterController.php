<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Register;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendWelcomeMail;
use App\Civic_User;

class RegisterController extends Controller
{
    
    public function index()
    {

    }

    public function register(Register $request)
    {
        $register = new Civic_User();

        $register->full_name = $request->full_name;
        $register->email_address = $request->email_address;
        $register->phone_number = $request->mobile;
        $register->address = $request->address;

        //add the collection to the DB using fluent ORM
        if( $register->save()){

        Mail::to($request->email_address)->send(new SendWelcomeMail($request) );

         return redirect('/')->with('status', 'User was added successfully');
    }

}

}
