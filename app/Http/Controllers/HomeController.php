<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\User;
use App\Helpers\Helper;
use App\Models\Package;
use App\Models\HomeInfo;
use App\Models\UserStat;
use App\Models\ViewCount;
use Illuminate\Support\Facades\Auth;
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
        Helper::user_stats('home', 'view', NULL, NULL);
        Helper::countView();
        return view('home');
    }


    public function profile(){
        Helper::user_stats('profile', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.profile');
    }

    public function action(){
        Helper::user_stats('action', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.action');
    }

    public function createData(){

        Helper::user_stats('create_data', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.create');
    }

    public function setting(){
        Helper::user_stats('setting', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.setting');
    }

    public function spinWheel(){
        return view('vvip_customers.spin_wheel');
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

        Helper::user_stats('list_view', 'view', NULL, NULL);
        Helper::countView();
        return view('vvip_customers.menu');
    }

}
