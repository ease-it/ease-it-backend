<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //get subscribed emails
    public function emails()
    {
        return response()->json(Email::all(), 200);
    }
    //Subscribe 
    public function subscribe(Request $request)
    {
        $email = Email::create($request->all());
        return response($email, 201);

    }
}
