<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function Admin_dashboard()
    {
        if (Auth()->user()->role == 1) {
            return view('admin.layouts.main');
        } else {
            return view('customer.layouts.main');
        }
    }

    public function Admin_logout()
    {
        Auth::logout();

        return redirect()->route('home_page');
    }
}
