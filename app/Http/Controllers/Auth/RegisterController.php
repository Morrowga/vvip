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
        $user->profile_image = "logo.jpeg";
        $user->step_one = 1;
        // $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        foreach($packages as $package){
            if($package->token === $request->package){
                $user->package = $package->package_name;
            }
        }
        // $user->smart_card_design_id = $request->smart_card_design_id;
        // $user->url = $request->url;
        // $user->encryption_url = $request->encryption;
        $user->secure_status = "public";
        $user->password = Hash::make($request->pin);
        $user->verification_code = random_int(100000, 999999);
        $user->save();        

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
        }

        // Authorisation details.
        $username = "kotoe@htut.com";
        $hash = "2564861082022776597e279f8912eba8428a4a7f";

        // Config variables. Consult http://api.txtlocal.com/docs for more info.
        $test = "0";

        // Data for text message. This is the text message data.
        $sender = "VVIP9"; // This is who the message appears to be from.
        $numbers = $user->phone_number; // A single number or a comma-seperated list of numbers
        $message = "Hi Welcome from VVIP9. Your OTP Code is " . $user->verification_code;
        // 612 chars or less
        // A single number or a comma-seperated list of numbers
        $message = urlencode($message);
        $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
        $ch = curl_init('https://control.ooredoo.com.mm/api2/send/?');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch); // This is the result from the API
        curl_close($ch);


        // return   ($result);

        
        // if($request->verifytype == 'emailverify'){
        //     if($user != null){
        //         MailController::registerVerifyEmail($user->name, $user->email, $user->verification_code);
        //         return redirect()->back()->with(session()->flash('alert-success', 'Your Account has been created.Please check email for verification link.'));
        //     }
        //     return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong'));
        // } else {
            return redirect()->route('otp.user', $user->id);
        // }
    }


    public function verifyUser(Request $request){
        $otp_code = $request->code1 . $request->code2 . $request->code3 . $request->code4 . $request->code5 . $request->code6;
        $userid = $request->userid;
        $user = User::where('verification_code', '=', $otp_code)->where('id', $userid)->first();
        if($user != null){
            $user->is_verified = 1;
            $user->save();
            return response()->json('success');
        }
        return response()->json('failed');
    }

    public function otp_view($userid){
        return view('vvip_customers.sms_code');
    }
}
