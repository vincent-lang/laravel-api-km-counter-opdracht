<?php

namespace App\Http\Controllers;

use App\Models\KmPrices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PricesController extends Controller
{
    public function edit()
    {
        $userRoles = Auth::user()->roles;
        $total = KmPrices::first();

        return view($userRoles . '/price.edit', compact('total'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'price' => 'required'
        ]);

        DB::table('km_prices')->update($validated);

        return redirect(route('dashboard'));
    }
}
