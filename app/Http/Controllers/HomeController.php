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

}
