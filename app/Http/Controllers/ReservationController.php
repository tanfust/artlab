<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('front-office/reservations/create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $reservation = new Reservation();
        $reservation->auction_id = 1;
        $reservation->reservation_date = now();
        $reservation->name = $request->input('name');
        $reservation->email = $request->input('email');

        $reservation->save();

        return redirect('/live-auctions')->with('success', 'Reservation created successfully');
    }

    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function cancel($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = 'Canceled';
        $reservation->save();
        return redirect('/live-auctions')->with('success', 'Reservation canceled successfully');
    }
}
