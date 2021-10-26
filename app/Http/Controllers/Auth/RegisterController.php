<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Package;
use App\Models\DeepLink;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/home";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
    ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        $packages = Package::get();

        $user = new User;
        $user->name = request()->name;
        $user->email = request()->email;
        $user->phone_number = request()->phone_number;
        foreach($packages as $package){
            if($package->token == request()->package){
                $user->package = $package->name;
            }
        }
        $user->smart_card_design_id = request()->smart_card_design_id;
        $user->url = "http://vvip9.co/" . request()->url;
        $user->secure_status = request()->secure_status;
        $user->password = Hash::make(request()->pin);
        $user->save();


        $link_datas = [ "links" => [['Facebook','https://i.ibb.co/pW7BTT4/facebook.png'],['Instagram','https://i.ibb.co/hF5vVDD/instagram.png'],['Youtube','https://i.ibb.co/QNvRKRw/youtube.png'],['Tiktok','https://i.ibb.co/X2D9Vv3/tiktok.png'],
                        ['Pinterest','https://i.ibb.co/SKGs1CW/pinterest.png'],['LinkedIn','https://i.ibb.co/Qjpm8w6/linkedin.png'],['Tripadvisor','https://i.ibb.co/cYgyxQ6/tripadvisor.png'],
                        ['Zoom','https://i.ibb.co/N74Prr2/zoom-meeting.png'], ['Google Maps','https://i.ibb.co/xSxcbhT/google-map.png'],['Vimeo','https://i.ibb.co/NSxKKZ2/vimeo.png'],['Amazon','https://i.ibb.co/QdrNqJn/amazon.png']]];
                       
                               
        foreach($link_datas['links'] as $link){
            $deep_link = new DeepLink;
            $deep_link->user_id =  $user->id;
            $deep_link->name = $link[0];
            $deep_link->icon = $link[1];
            $deep_link->active = 0;
            $deep_link->save();
        }

        return $user;
    }
}
