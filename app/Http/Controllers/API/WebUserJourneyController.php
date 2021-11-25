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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class WebUserJourneyController extends Controller
{
    public function package(){
        $user_stat = new UserStat();
        $user_stat->user_id = (Auth::user()) ? Auth::id() : NULL;
        $user_stat->user_ip = FacadesRequest::getClientIp();
        $user_stat->user_os = Helper::get_os();
        $user_stat->user_browser = Helper::get_browsers();
        $user_stat->user_agent = FacadesRequest::header('User-Agent');
        $user_stat->social_media = FacadesRequest::server('HTTP_REFERER');
        $user_stat->device_ip = null;
        $user_stat->device_id = null;
        $user_stat->device_name = Helper::get_device();
        $user_stat->nfc_support = null;
        $user_stat->used_at = Carbon::now()->format('Y-m-d H:i:s');

        $user_stat->save();

        $packages = Package::get();
        $normal = $packages[0];
        $standard = $packages[1];
        $luxury = $packages[2];
        $cards = SmartCardDesign::get();
        $count = Helper::countView();
        return view('vvip_customers.package')->with('normal', $normal)->with('standard', $standard)->with('luxury', $luxury)->with('cards', $cards);
    }

    // public function lang($lang){
    //     $lang = ['en', 'mm'];
    //     foreach($lang as $l){
    //         App::setlocale($l);
    //     }
    // }


    public function main_view(){

        $user_stat = new UserStat();
        $user_stat->user_id = (Auth::user()) ? Auth::id() : NULL;
        $user_stat->user_ip = FacadesRequest::getClientIp();
        $user_stat->user_os = Helper::get_os();
        $user_stat->user_browser = Helper::get_browsers();
        $user_stat->user_agent = FacadesRequest::header('User-Agent');
        $user_stat->social_media = FacadesRequest::server('HTTP_REFERER');
        $user_stat->device_ip = null;
        $user_stat->device_id = null;
        $user_stat->device_name = Helper::get_device();
        $user_stat->nfc_support = null;
        $user_stat->used_at = Carbon::now()->format('Y-m-d H:i:s');

        $user_stat->save();

        $count = Helper::countView();


        return view('vvip_customers.main_page');
    }

    public function products(){
        $user_stat = new UserStat();
        $user_stat->user_id = (Auth::user()) ? Auth::id() : NULL;
        $user_stat->user_ip = FacadesRequest::getClientIp();
        $user_stat->user_os = Helper::get_os();
        $user_stat->user_browser = Helper::get_browsers();
        $user_stat->user_agent = FacadesRequest::header('User-Agent');
        $user_stat->social_media = FacadesRequest::server('HTTP_REFERER');
        $user_stat->device_ip = null;
        $user_stat->device_id = null;
        $user_stat->device_name = Helper::get_device();
        $user_stat->nfc_support = null;
        $user_stat->used_at = Carbon::now()->format('Y-m-d H:i:s');

        $user_stat->save();
        $count = Helper::countView();


        return view('vvip_customers.product');
    }

    public function about(){
        $user_stat = new UserStat();
        $user_stat->user_id = (Auth::user()) ? Auth::id() : NULL;
        $user_stat->user_ip = FacadesRequest::getClientIp();
        $user_stat->user_os = Helper::get_os();
        $user_stat->user_browser = Helper::get_browsers();
        $user_stat->user_agent = FacadesRequest::header('User-Agent');
        $user_stat->social_media = FacadesRequest::server('HTTP_REFERER');
        $user_stat->device_ip = null;
        $user_stat->device_id = null;
        $user_stat->device_name = Helper::get_device();
        $user_stat->nfc_support = null;
        $user_stat->used_at = Carbon::now()->format('Y-m-d H:i:s');

        $user_stat->save();
        $count = Helper::countView();


        return view('vvip_customers.about');
    }

    public function contact(){
        $user_stat = new UserStat();
        $user_stat->user_id = (Auth::user()) ? Auth::id() : NULL;
        $user_stat->user_ip = FacadesRequest::getClientIp();
        $user_stat->user_os = Helper::get_os();
        $user_stat->user_browser = Helper::get_browsers();
        $user_stat->user_agent = FacadesRequest::header('User-Agent');
        $user_stat->social_media = FacadesRequest::server('HTTP_REFERER');
        $user_stat->device_ip = null;
        $user_stat->device_id = null;
        $user_stat->device_name = Helper::get_device();
        $user_stat->nfc_support = null;
        $user_stat->used_at = Carbon::now()->format('Y-m-d H:i:s');

        $user_stat->save();
        $count = Helper::countView();

        return view('vvip_customers.contact');
    }
}
