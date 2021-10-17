<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function username(){
        return 'phone_number';
    }

    public function loginApi(Request $request){
        $user_data_phone = $request->input('phone_number');
        $user_data_password = $request->input('password');
        if($user_data_phone){
            $user_data = User::where('phone_number', $user_data_phone)->first();
            if(!empty($user_data)){
                if(Hash::check($user_data_password, $user_data->password) !== false){
                    if($user_data->package_status === "active"){
                        $messages = [
                            'user_id' => $user_data->id,
                            'status' => '200',
                            'message' => 'Success',
                            'data' => true
                        ];
                        return $messages;
                    } else {
                        $messages = [
                            'status' => "403" ,
                            'data' => false,
                            'message' => 'Your package is expired.'
                        ];
                        return $messages;
                    }
                } else {
                    $messages = [
                        'status' => '403',
                        'message' => 'Your password is wrong.'
                    ];
                    return $messages;
                }
            } else {
                $messages = [
                    'status' => '500 Internal',
                    'message' => 'Your phone number is wrong or valid'
                ]; 
                return $messages;
            }
        }
    }
}


