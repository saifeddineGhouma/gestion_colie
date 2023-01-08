<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function showLogin()
    {
        if(!auth()->guard('admin')->check())
          return view('part_admin.auth.login');
        return redirect()->route('admin.dashboard');
    }
    public function guard()
    {
     return Auth::guard('admin');
    }

    public function authenticate()
    {
		$request = request();
			if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

                return redirect()->route('admin.dashboard');
			}
			// Redirect to dashboard page
			else {
				return back()->withErrors(['email' => 'error login'])->withInput();
			}

	}
    public function logout()
    {
        auth()->guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
