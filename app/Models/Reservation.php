<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
    public function transitaire()
    {
        return $this->belongsTo(Transitaire::class);
    }
    public function total()
    {
        $quantity = !empty($this->quantity) ? $this->quantity : 1 ;
        $poids = !empty($this->poids) ? $this->poids : 1 ;
        return $this->offer->tarif_en_kg * $quantity * $poids;
    }
}
