<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAir extends Model
{
    use HasFactory;

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function getImage()
    {
        if($this->id % 2 == 0)
          return asset('assets/images/company/flyemirates.PNG') ;
        return asset('assets/images/company/tunisair.PNG') ;

    }

}
