<?php

namespace App\Http\Controllers\Transitaire;

use App\Http\Controllers\Controller;
use App\Models\Offer;
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
           if(in_array('qte',$services) && $this->checkRequest($request->$service["qte"])){
            session()->put('qte',$request->qte );
           }
           if(in_array('type_colis',$services) && $this->checkRequest($request->$service["type_colis"])){
            session()->put('type_colis',$request->type_colis );
           }
           if( $this->checkRequest($request->$service["longeur"])){
            session()->put('longeur',$request->longeur );
              $offers->where('longeur', '>',$request->$service["longeur"]);
           }
           if($this->checkRequest($request->$service["hauteur"])){
            session()->put('hauteur',$request->hauteur );
              $offers->where('hauteur', '>',$request->$service["hauteur"]);
           }
           if(in_array('type_gerbable',$services) && $this->checkRequest($request->$service["type_gerbable"])){
               session()->put('type_gerbable',$request->type_gerbable );
               $offers->where('type_gerbable', $request->$service["type_gerbable"]);
           }
           if(in_array('type_emballage',$services) && $this->checkRequest($request->$service["type_emballage"])){
                session()->put('type_emballage',$request->type_emballage );
               $offers->where('type_emballage', $request->$service["type_emballage"]);
           }
           if($this->checkRequest($request->$service["poids"])){
                session()->put('poids',$request->poids );
                $offers->where('poids', '>',$request->$service["poids"]);
            }
        }

        return view('part_transitaire.dashboard.reservations.offers',['offers'=>$offers->get()]);

    }catch(Exception $e){
        dd($request->all(),$e->getMessage());
    }
    }

    private function checkRequest($value){

        return isset($value) && !empty($value);
    }
}
