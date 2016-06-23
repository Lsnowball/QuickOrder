<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct() {
    	$this->middleware('Auth');
    }

    // Show login
    public function showLogin() {
        // show the form
        return view('pages.login');
    }
}
