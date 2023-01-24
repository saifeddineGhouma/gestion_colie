<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function company_air()
    {
        return $this->belongsTo(CompanyAir::class);
    }

    public function isReserved($transitaire_id){
        return Reservation::where('transitaire_id', $transitaire_id)->where('offer_id', $this->id)->exists();

    }
}
