<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class CustomerTicketController extends Controller
{
    //


    public function Open_Ticket()
    {
        $ticket = DB::table('tickets')->where('user_id', Auth::id())->orderBy('id', 'DESC')->take(10)->get();
        return view('customer.ticket.view_ticket', compact('ticket'));
    }

    public function new_ticket()
    {
        return view('customer.ticket.new_ticket');
    }


    public function store_ticket(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required',
        ]);

        $data = array();
        $data['subject'] = $request->subject;
        $data['service'] = $request->service;
        $data['priority'] = $request->priority;
        $data['message'] = $request->message;
        $data['user_id'] = Auth::id();
        $data['status'] = 0;
        $data['date'] = date('Y-m-d');

        if ($request->image) {
            //working with image
            $photo = $request->image;
            $photoname = uniqid() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(600, 350)->save('customer/images/ticket/' . $photoname);  //image intervention
            $data['image'] = 'image/ticket/' . $photoname;   // public/files/brand/plus-point.jpg
        }

        DB::table('tickets')->insert($data);
        return redirect()->route('open.ticket');
    }




    public function show_Ticket(Request $request)
    {

        $ticket = DB::table('tickets')->where('id', $request->id)->first();
        return view('customer.ticket.show_ticket', compact('ticket'));
    }
}
