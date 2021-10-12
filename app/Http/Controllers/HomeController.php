<?php

namespace App\Http\Controllers;

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

    public function pin(){
        $user = User::find(Auth::user()->id);
       return view('vvip_customers.create_pin', compact('user'));
    }

    public function web_pin(Request $request){
        if (!empty($request->pin)) {
            // $user_id = $pin['user_id'];
            $has_user = User::find(Auth::user()->id);
            if (!empty($has_user)) {
                $has_user->password = Hash::make($request->pin);
                $has_user->save();
                return redirect()->route("home");
            } else {
                return "404";
            }
        }
    }

    public function plan(){
        return view('vvip_customers.select_plan');
    }
}
