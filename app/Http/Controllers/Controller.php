<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DateTime;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index(){
        $ticketsAvailable = true;
        $roomsAvailable = true;

        $currentDate = new DateTime();
        $roomsEndDate = new DateTime("09/23/2022");
        $ticketsEndDate = new DateTime("10/21/2022");
        $remainingTickets = 70 - Count(Ticket::all());

        if($currentDate > $ticketsEndDate || $remainingTickets <= 0) $ticketsAvailable = false;
        if($currentDate > $roomsEndDate || $remainingTickets <= 0) $roomsAvailable = false;

        return view('index')
            ->with('ticketsAvailable', $ticketsAvailable)
            ->with('roomsAvailable', $roomsAvailable);
    }
}
