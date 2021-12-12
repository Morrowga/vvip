<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Package;
use App\Models\DeepLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Mail\MailController;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Crypt;

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
    public function register(Request $request)
    {   
        $packages = Package::get();

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        foreach($packages as $package){
            if($package->token === $request->package){
                $user->package = $package->package_name;
            }
        }
        $user->smart_card_design_id = $request->smart_card_design_id;
        $user->url = $request->url;
        $user->encryption_url = $request->encryption;
        $user->secure_status = $request->secure_status;
        $user->password = Hash::make($request->pin);
        $user->verification_code = sha1(time());
        $user->save();

        // Helper::user_stats('register', 'create', 'users', $user->id);
        

        $link_datas = [ "links" => [['Facebook','https://i.ibb.co/pW7BTT4/facebook.png','com.facebook.kanata'],['Instagram','https://i.ibb.co/hF5vVDD/instagram.png','com.instagram.android'],['Youtube','https://i.ibb.co/QNvRKRw/youtube.png','com.google.android.youtube'],['Tiktok','https://i.ibb.co/X2D9Vv3/tiktok.png','com.ss.android.ugc.trill'],
        ['Pinterest','https://i.ibb.co/SKGs1CW/pinterest.png','com.pinterest'],['LinkedIn','https://i.ibb.co/Qjpm8w6/linkedin.png','com.linkedin.android'],['Tripadvisor','https://i.ibb.co/cYgyxQ6/tripadvisor.png','com.tripadvisor.tripadvisor'],
        ['Zoom','https://i.ibb.co/N74Prr2/zoom-meeting.png','us.zoom.videomeetings'], ['Google Maps','https://i.ibb.co/xSxcbhT/google-map.png','com.google.android.apps.mapslite'],['Vimeo','https://i.ibb.co/NSxKKZ2/vimeo.png','com.vimeocreate.videoeditor.moviemaker'],['Amazon','https://i.ibb.co/QdrNqJn/amazon.png','amazon&c=apps']]];
                       
                               
        foreach($link_datas['links'] as $link){
            $deep_link = new DeepLink;
            $deep_link->user_id =  $user->id;
            $deep_link->name = $link[0];
            $deep_link->icon = $link[1];
            $deep_link->app_package = $link[2];
            $deep_link->active = 0;
            $deep_link->save();
            // Helper::user_stats('register', 'create', 'deep_links', $deep_link->id);
        }


        if($user != null){
            MailController::registerVerifyEmail($user->name, $user->email, $user->verification_code);
            return redirect()->back()->with(session()->flash('alert-success', 'Your Account has been created.Please check email for verification link.'));
        }

        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong'));
    }


    public function verifyUser(Request $request){
        $verification_code =  \Illuminate\Support\Facades\Request::get('code');
        $user = User::where('verification_code', '=', $verification_code)->first();
        if($user != null){
            $user->is_verified = 1;
            $user->save();

            // Helper::user_stats('verify_user', 'create', 'users', $user->id);

            return redirect()->route('login')->with(session()->flash('alert-success', 'Your Account is verified. Please Login.'));
        }

        return redirect()->route('login')->with(session()->flash('alert-danger', 'Invalid Code'));
    }
}
