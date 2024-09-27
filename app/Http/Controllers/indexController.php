<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    //

    public function home_page()
    {
        return view('welcome');
    }

    public function customer_logout()
    {
        // Logs out the currently authenticated user
        Auth::logout();

        // Redirects to the home page
        return redirect()->to('/');
    }
}
