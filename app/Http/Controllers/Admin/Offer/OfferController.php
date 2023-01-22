<?php

namespace App\Http\Controllers\Admin\Offer;

use App\Http\Controllers\Controller;
use App\Models\CompanyAir;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('part_admin.dashboard.offers.index',['offers'=>$offers]);
    }
    public function create()
    {
        $companies = CompanyAir::all();
        return view('part_admin.dashboard.offers.create',['companies'=>$companies]);
    }

    public function store(Request $request)
    {
        $offer = new Offer();
        $offer->company_air_id = $request->company_air_id;
        $offer->num_vol = $request->num_vol;
        $offer->airport_depart = $request->airport_depart;
        $offer->airport_arrive = $request->airport_arrive;
        $offer->day_depart = $request->day_depart;
        $offer->freq_depart = $request->freq_depart;
        $offer->poids = $request->poids;
        $offer->tarif_en_kg = $request->tarif_en_kg;
        $offer->capacite_en_text = $request->capacite_en_text;
        $offer->commission = $request->commission;
        $offer->type_gerbable = $request->type_gerbable;

        $offer->expire_date = $request->expire_date;
        $offer->service = $request->service;
        $offer->longeur = $request->longeur;
        $offer->largeur = $request->largeur;
        $offer->hauteur = $request->hauteur;
        $offer->type_de_point = $request->type_de_point;
        $offer->type_emballage = $request->type_emballage;
        $offer->save();
        return redirect()->route('admin.offer.index');

    }
    public function edit(Offer $offer)
    {
        $companies = CompanyAir::all();
        return view('part_admin.dashboard.offers.edit',['companies'=>$companies , 'offer'=>$offer]);
    }
    public function update(Offer $offer , Request $request)
    {
        $offer->company_air_id = $request->company_air_id;
        $offer->num_vol = $request->num_vol;
        $offer->airport_depart = $request->airport_depart;
        $offer->airport_arrive = $request->airport_arrive;
        $offer->day_depart = $request->day_depart;
        $offer->freq_depart = $request->freq_depart;
        $offer->poids = $request->poids;
        $offer->tarif_en_kg = $request->tarif_en_kg;
        $offer->capacite_en_text = $request->capacite_en_text;
        $offer->commission = $request->commission;
        $offer->type_gerbable = $request->type_gerbable;

        $offer->expire_date = $request->expire_date;
        $offer->service = $request->service;
        $offer->longeur = $request->longeur;
        $offer->largeur = $request->largeur;
        $offer->hauteur = $request->hauteur;
        $offer->type_de_point = $request->type_de_point;
        $offer->type_emballage = $request->type_emballage;
        $offer->save();
        return redirect()->route('admin.offer.index');
    }
}
