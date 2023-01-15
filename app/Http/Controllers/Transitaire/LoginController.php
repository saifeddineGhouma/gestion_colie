<?php

namespace App\Http\Controllers\Transitaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('part_transitaire.auth.login');
    }
    public function authenticate()
    {
		$request = request();
			if (Auth::guard('transitaire')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('transitaire.dashboard');
			}
			// Redirect to dashboard page
			else {
				return back()->withErrors(['email' => 'error login'])->withInput();
			}
	}
}
