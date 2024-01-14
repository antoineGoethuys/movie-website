<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $profile = Profile::find($user->id);

        if ($user === null) {
            return redirect('/');
        }

        return view('profile.show',
        [
            'user' => $user,
            'profile' => $profile
        ]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->route('profile.show');
    }

    public function destroy()
    {
        $user = Auth::user();
        $user->delete();
        return redirect()->route('home');
    }
}
