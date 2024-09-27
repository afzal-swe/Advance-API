<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function Customer_Dashboard()
    {
        return view('customer.layouts.main');
    }
}
