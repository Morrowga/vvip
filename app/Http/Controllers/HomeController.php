<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Helpers\Helper;
use App\Models\Package;
use App\Models\HomeInfo;
use App\Models\UserStat;
use App\Models\ViewCount;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
        return view('home',compact('count'));
    }


    public function profile(){
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
        return view('vvip_customers.profile');
    }

    public function action(){
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
        return view('vvip_customers.action');
    }

    public function createData(){

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

        return view('vvip_customers.create');
    }

    public function setting(){
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

        return view('vvip_customers.setting');
    }

    // public function addDeep_link(Request $request){
    //     $user_id = $request->user_id;
    //     // return $user_id;
    //     // $url = $request->url;
    //     // $name = $request->name;
    //     // $active = $request->active;
    //     $link =  DeepLink::where('user_id', $user_id)->get();
    //     return $link;
    // }

    public function listView(){

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

        return view('vvip_customers.menu');
    }

}
