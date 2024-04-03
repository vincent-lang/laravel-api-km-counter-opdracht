<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    public function index()
    {
        $userRoles = Auth::user()->roles;
        $rides = Ride::with('user')->get();
        return view($userRoles . '/progress.index', compact('rides'));
    }

    public function edit(Ride $ride, User $user)
    {
        $userRoles = Auth::user()->roles;
        return view($userRoles . '/progress.edit', compact('ride', 'user'));
    }

    public function update(Request $request, Ride $ride, User $user)
    {
        $validated = $request->validate([
            'progress' => 'required'
        ]);

        DB::table('rides')->where('id', $ride->id)->where('user_id', $user->id)->update($validated);

        return redirect(route('dashboard'));
    }

    public function delete(Ride $ride, User $user)
    {
        DB::table('rides')->where('id', $ride->id)->where('user_id', $user->id)->delete();

        return redirect(route('dashboard'));
    }
}
