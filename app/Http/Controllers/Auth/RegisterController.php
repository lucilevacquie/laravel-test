<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        //validate the request
        $this->validate($request, [
            "name" => "required|max:50",
            "username" => "required|max:50",
            "email" => "required|email|max:50",
            "password" => "required|confirmed",
        ]);
        //store the user
        //sign the user in
        //redirect the user
    }
}
