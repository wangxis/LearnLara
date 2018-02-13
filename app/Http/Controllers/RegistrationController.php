<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }

    public function store() 
    {
    	//validate user
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required'


    	]);

    	//Create and save user
    	$user = User::create(request(['name', 'email', 'password']));

    	auth()->login($user); //sign user in



    	//Redirect page
    }
}
