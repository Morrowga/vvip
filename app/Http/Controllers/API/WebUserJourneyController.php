<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class WebUserJourneyController extends Controller
{
    public function package(){
        $packages = Package::get();
        $normal = $packages[0];
        $standard = $packages[1];
        $luxury = $packages[2];
        return view('vvip_customers.package')->with('normal', $normal)->with('standard', $standard)->with('luxury', $luxury);
    }


    public function main_view(){
        return view('vvip_customers.main_page');
    }

    public function createPlan(Request $request){
        $package = new Package();
        $package->image = $request->image;
        $package->plan_name = $request->plan_name;
        $package->price = $request->price;
        $package->token = rand(1000000, 9999999);
        $package->package_name = $request->package_name;
        $package->save();

        return $package;
    }
}
