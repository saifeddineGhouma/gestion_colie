<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Transitaire extends Authenticatable
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(CompanyTransitaire::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
