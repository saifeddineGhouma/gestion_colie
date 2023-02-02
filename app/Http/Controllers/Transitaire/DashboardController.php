<?php

namespace App\Http\Controllers\Transitaire;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Reservation;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('part_transitaire.dashboard.index');
    }

    public function searchOffer(Request $request)
    {
        try{


        $offers = Offer::query();
        if($request->filled('service')){
            session()->put('service',$request->service );
            $offers->where('service', $request->service);
        }
        if($request->filled('airport_depart')){
            session()->put('airport_depart',$request->airport_depart );
            $offers->where('airport_depart', $request->airport_depart);
        }
        if($request->filled('airport_arrive')){
            session()->put('airport_arrive',$request->airport_arrive );
            $offers->where('airport_arrive', $request->airport_arrive);
        }
        if($request->filled('expire_date')){
            session()->put('expire_date',$request->expire_date );
            $offers->whereDate('expire_date', '>',$request->expire_date);
        }
        if($request->filled('service')){


            $service = $request->service;
            $services = $request[$service];
           if(array_key_exists('qte', $services) && $this->checkRequest($request->$service["qte"])){
            session()->put('qte',$request->$service["qte"] );
           }
           if(array_key_exists('type_colis', $services) && $this->checkRequest($request->$service["type_colis"])){
            session()->put('type_colis',$request->$service["type_colis"]);
           }
           if( array_key_exists('longeur', $services) &&$this->checkRequest($request->$service["longeur"])){
            session()->put('longeur',$request->$service["longeur"] );
              $offers->where('longeur', '>',$request->$service["longeur"]);
           }
           if(array_key_exists('hauteur', $services) &&$this->checkRequest($request->$service["hauteur"])){

            session()->put('hauteur',$request->$service["hauteur"] );
              $offers->where('hauteur', '>',$request->$service["hauteur"]);
           }
           if(array_key_exists('type_gerbable', $services) &&$this->checkRequest($request->$service["type_gerbable"])){
               session()->put('type_gerbable',$request->$service["type_gerbable"] );
               $offers->where('type_gerbable', $request->$service["type_gerbable"]);
           }
           if(array_key_exists('type_emballage', $services) && $this->checkRequest($request->$service["type_emballage"])){
                session()->put('type_emballage',$request->$service["type_emballage"] );
               $offers->where('type_emballage', $request->$service["type_emballage"]);
           }
           if(array_key_exists('poids', $services) &&$this->checkRequest($request->$service["poids"])){
                session()->put('poids',$request->$service["poids"] );
                $offers->where('poids', '>',$request->$service["poids"]);
            }
        }

        return view('part_transitaire.dashboard.reservations.offers',['offers'=>$offers->get()]);

    }catch(Exception $e){
        dd($request->all(),$e->getMessage());
    }
    }
    private function querySearch(){

    }
    private function checkRequest($value){

        return isset($value) && !empty($value);
    }
    public function reserveOffer($offer_id){
        $isCheck = Reservation::where('offer_id', $offer_id)
            ->where('transitaire_id', auth()->guard('transitaire')->user()->id)
            ->first();
        if(!empty($isCheck)){
           // return redirect()->route('transitaire.reservation.show',$isCheck);
            return redirect()->route('transitaire.reservation.index');
        }

        $reserve = new Reservation();
        $reserve->offer_id = $offer_id;
        $reserve->transitaire_id = auth()->guard('transitaire')->user()->id;
        $reserve->poids = session()->get('poids');
        $reserve->quantity = session()->get('qte');
        $reserve->longueur = session()->get('longeur');
        $reserve->hauteur = session()->get('hauteur');
        $reserve->largeur = session()->get('largeur');
        $reserve->type_colis = session()->get('type_colis');
        $reserve->accepte_tmp = session()->get('accepte_tmp');
        $reserve->humidity_rouge = session()->get('humidity_rouge');
        $reserve->type_avoin = session()->get('type_avoin');
        $reserve->status = "en_attend";
        $reserve->save();
        return redirect()->route('transitaire.reservation.index');

    }

    public function recap(Offer $offer)
    {
        return  view('part_transitaire.dashboard.reservations.show',compact('offer'));
    }

    public function reservations()
    {
       // $company_id = auth()->guard('transitaire')->user()->company_id;
        $reservations = auth()->guard('transitaire')->user()->reservations;

        return  view('part_transitaire.dashboard.reservations.index',compact('reservations'));

    }
}
