<?php

namespace App\Http\Controllers\Admin\Transitaire;

use App\Http\Controllers\Controller;
use App\Models\CompanyTransitaire;
use App\Traits\FileTrait;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use FileTrait;
   public function index()
   {
     $companies = CompanyTransitaire::all();

        return view('part_admin.dashboard.transitaires.company.index',['companies'=>$companies]);
   }
    public function create()
    {
        return view('part_admin.dashboard.transitaires.company.create');
    }
    public function store(Request $request)
    {
        $company = new CompanyTransitaire();
        $company->name = $request->name ;
        $company->email = $request->email;
        $company->telephone = $request->telephone;
        if(!empty($request->logo)){
           $logo =  $this->uploadFile($request->file('logo') ,'uploads/transitaire/company/');
            $company->logo = $logo;
        }
        $company->save();

        return back();
    }
}
