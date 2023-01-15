<?php

namespace App\Http\Controllers\Admin\Transitaire;

use App\Http\Controllers\Controller;
use App\Models\CompanyTransitaire;
use App\Models\Transitaire;
use Illuminate\Http\Request;

class TransitaireController extends Controller
{

    public function index()
    {
        $agents = Transitaire::all();
        return view('part_admin.dashboard.transitaires.agent.index', ['agents' => $agents]);
    }
    public function create()
    {
        $companies = CompanyTransitaire::all();
        return view('part_admin.dashboard.transitaires.agent.create', ['companies' => $companies]);
    }
    public function store(Request $request)
    {
        $transitaire = new Transitaire();
        $transitaire->nom = $request->nom;
        $transitaire->prenom = $request->prenom;
        $transitaire->adresse = $request->adresse;
        $transitaire->ville = $request->ville;
        $transitaire->code_postal = $request->code_postal;
        $transitaire->pays = $request->pays;
        $transitaire->fonction = $request->fonction;
        $transitaire->email = $request->email;
        $transitaire->telephone = $request->telephone;
        $transitaire->cass_numero = $request->cnss_numero;
        $transitaire->company_id = $request->company_id;
        $transitaire->save();
        return back();
    }
}
