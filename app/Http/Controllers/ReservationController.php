<?php

namespace App\Http\Controllers;

use App\Habitation;
use App\Http\Requests\StoreReservationRequest;
use App\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function storeReservation(StoreReservationRequest $request, $id)
    {
        $params = $request->validated();
        $params['user_id'] = Auth::id();
        $params['habitation_id'] = $id;
        Reservation::create($params);
        return redirect()->route('habitation');
    }

    public function adminReservation()
    {
        $reservation = Reservation::all();
        return view('adminReservation')
            ->with('reservation', $reservation);
    }
}
