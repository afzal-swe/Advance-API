<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;


class TicketController extends Controller
{
    //
    private $db_tickets;
    private $db_replies;

    public function __construct()
    {
        $this->db_tickets = "tickets";
        $this->db_replies = "replies";
    }

    public function all_ticket(Request $request)
    {

        $query = DB::table('tickets')
            ->orderBy('id', 'DESC')
            ->leftJoin('users', 'tickets.user_id', 'users.id')
            ->select('tickets.*', 'users.name')
            ->get();

        return view('admin.ticket.index', compact('query'));
    }
}
