<?php

namespace App\Http\Controllers\Transitaire;

use App\Http\Controllers\Controller;
use App\Models\CompanyTransitaire;
use App\Models\Transitaire;
use Exception;
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

    public function showInscription()
    {
        $companies = CompanyTransitaire::all();
        return view('part_transitaire.auth.register',['companies'=>$companies]);
    }
    public function logout()
    {
        auth()->guard('transitaire')->logout();

        return redirect()->route('transitaire.login');
    }
    public function register(Request $request)
    {
        try{
            $transitaire = new Transitaire();
            $transitaire->nom = $request->nom;
            $transitaire->prenom = $request->prenom;
            $transitaire->company_id = $request->company_id;
            $transitaire->adresse = $request->adresse;
            $transitaire->ville = $request->ville;
            $transitaire->code_postal = $request->code_postal;
            $transitaire->pays = $request->pays;
            $transitaire->fonction = $request->fonction;
            $transitaire->telephone = $request->telephone;
            $transitaire->cass_numero = $request->cass_numero;
            $transitaire->show_password =  $request->password;
            $transitaire->password =  bcrypt($request->password);
            $transitaire->telephone = $request->telephone;
            $transitaire->save();
            if (Auth::guard('transitaire')->attempt(['email' => $transitaire->email, 'password' => $transitaire->show_password])) {
                return redirect()->route('transitaire.dashboard');
            }

        }catch(Exception $e){
            abort(500, 'Something went wrong');

        }



    }
}
