<?php

namespace App\Http\Controllers;

use App\Habitation;
use App\Http\Requests\StoreReservationRequest;
use App\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Store post into database
     * @param StoreReservationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeReservation(StoreReservationRequest $request, $id)
    {
        $params = $request->validated();
        $params['user_id'] = Auth::id();
        $params['habitation_id'] = Habitation::findOrFail($id);
        dd($params);
        Reservation::create($params);
        return redirect()->route('habitation');
    }
}
