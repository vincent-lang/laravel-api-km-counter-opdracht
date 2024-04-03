<?php

namespace App\Http\Controllers;

use App\Models\KmPrices;
use App\Models\Ride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KlantController extends Controller
{
    public function create()
    {
        $userRoles = Auth::user()->roles;
        $total = KmPrices::first();
        return view($userRoles . '/ride.create', compact('total'));
    }

    public function store(Request $request)
    {
        //* progress = planned
        //* progress = ongoing
        //* progress = executed
        $id = Auth::user()->id;
        $request->merge(['progress' => 'planned']);
        $request->merge(['user_id' => $id]);
        $validated = $request->validate([
            'pick_up_adress' => 'required',
            'drop_off_adress' => 'required',
            'progress' => 'required',
            'user_id' => 'required',
            'distance' => 'required',
            'totalPrice' => 'required',
        ]);

        Ride::create($validated);

        return redirect('/dashboard');
    }
}
