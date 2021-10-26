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

    // //createPackage//tempo
    // public function createPlan(Request $request){
    //     $package = new Package();
    //     $package->image = $request->image;
    //     $package->plan_name = $request->plan_name;
    //     $package->price = $request->price;
    //     $package->token = rand(1000000, 9999999);
    //     $package->package_name = $request->package_name;
    //     $package->save();

    //     return $package;
    // }


    // public function createTemplate(Request $request){
    //     $card = new SmartCardDesign();
    //     $card->front_image = $request->front_image;
    //     $card->back_image = $request->back_image;
    //     $card->save();


    //     return $card;
    // }
}
