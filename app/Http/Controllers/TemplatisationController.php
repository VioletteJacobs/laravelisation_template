<?php

namespace App\Http\Controllers;

use App\Models\Li_nav;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Titre;
use Illuminate\Http\Request;

class TemplatisationController extends Controller
{
    public function index (){
        $DbLiNav = Li_nav::all();
        $DbServices = Service::all();
        $DbPortfolio = Portfolio::all();
        $DbTitre = Titre::all();
        return view ("welcome",compact("DbLiNav", "DbServices", "DbPortfolio", "DbTitre"));
    }
}
