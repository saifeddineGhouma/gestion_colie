<?php

namespace App\Http\Controllers\Transitaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('part_transitaire.dashboard.index');
    }
}
