<?php

namespace App\Http\Controllers;

use App\Models\HomeInfo;
use App\Models\Package;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('home');
    }


    public function profile(){
        return view('vvip_customers.profile');
    }

    public function action(){
        return view('vvip_customers.action');
    }

    public function createData(){
        return view('vvip_customers.create');
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
        return view('vvip_customers.menu');
    }

}
