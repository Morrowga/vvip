<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DeepLink;
use App\Models\Package;
use App\Models\SmartCardDesign;
use Illuminate\Http\Request;

class WebUserJourneyController extends Controller
{
    public function package(){
        $packages = Package::get();
        $normal = $packages[0];
        $standard = $packages[1];
        $luxury = $packages[2];
        $cards = SmartCardDesign::get();
        return view('vvip_customers.package')->with('normal', $normal)->with('standard', $standard)->with('luxury', $luxury)->with('cards', $cards);
    }


    public function main_view(){
        return view('vvip_customers.main_page');
    }
    
}
