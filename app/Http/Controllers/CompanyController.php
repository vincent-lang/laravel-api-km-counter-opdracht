<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $request->merge(['user_id' => $id]);
        $validated = $request->validate([
            'company_name' => 'required',
            'street' => 'required',
            'house_number' => 'required',
            'zipcode' => 'required',
            'place' => 'required',
            'country' => 'required',
            'kvk_number' => 'required',
            'phone_number' => 'required',
            'user_id' => 'required',
        ]);

        Company::create($validated);

        return redirect('/profile');
    }
}
