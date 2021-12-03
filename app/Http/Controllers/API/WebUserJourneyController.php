<?php

namespace App\Http\Controllers\API;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\DeepLink;
use App\Models\Package;
use App\Models\SmartCardDesign;
use App\Models\UserDevice;
use App\Models\UserStat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class WebUserJourneyController extends Controller
{
    public function __construct() {
        // 
    }

    public function package(){
        $packages = Package::get();
        $normal = $packages[0];
        $standard = $packages[1];
        $luxury = $packages[2];
        $cards = SmartCardDesign::get();

        Helper::user_stats('package', 'view', NULL, NULL);
        Helper::countView();
        
        return view('vvip_customers.package')->with('normal', $normal)->with('standard', $standard)->with('luxury', $luxury)->with('cards', $cards);
    }

    // public function lang($lang){
    //     $lang = ['en', 'mm'];
    //     foreach($lang as $l){
    //         App::setlocale($l);
    //     }
    // }


    public function main_view(){
        Helper::user_stats('index', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.main_page');
    }

    public function products(){
        Helper::user_stats('products', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.product');
    }

    public function about(){
        Helper::user_stats('about', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.about');
    }

    public function contact(){
        Helper::user_stats('contact', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.contact');
    }

    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
