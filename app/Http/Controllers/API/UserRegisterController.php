<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{

    //register for mobile
    public function registerUser(Request $request){
        if(!empty($request)){
            $name = $request->name;
            $phone_number = $request->phone_number;
            $email = $request->email;
            $package_name = $request->package_name;
            $country_number = $request->country_number;
            $url = $request->url;
            $secure_status = $request->secure_status;
            $phone = $country_number . $phone_number;
            $user_exist_phone = User::where('phone_number', '=', $phone)->first();
            $user_exist_url = User::where('url', '=', $url)->first();
                if($user_exist_phone === null){
                    if($user_exist_url === null){
                        $user = new User;
                        $user->name = $name;
                        $user->phone_number = $phone;
                        $user->email = $email;
                        $user->package = $package_name;
                        $user->package_status = "active";
                        $user->package_start_date = Carbon::now();
                        $user->package_end_date = Carbon::now()->addYear(1);
                        $remain = $user->package_end_date->diffIndays($user->package_start_date);
                        $user->remaining_days = $remain;
                        $user->url = $url;
                        $user->secure_status = $secure_status;
                        $user->save();
                        
                        $messages = [
                            "status" => '200',
                            "message" => 'Success',
                            "user_id" => $user->id
                        ];
                        return $messages;
                    } else {
                        $messages = [
                            "status" => '500',
                            "message" => 'URL Exist',
                        ];
                        return $messages;
                    }
                }  else {
                    $messages = [
                        "status" => '500',
                        "message" => 'Phone Number Exist',
                    ];
                    return $messages;
                }
        } else {

            $messages = [
                "status" => '404',
                "message" => 'Something went wrong'
            ];
            return $messages;
        }
    }

    //pin_create for mobile
    public function createPin(Request $request,$user_id = null){
        $create_pin = $request->input('pin');
        if(!empty($create_pin)){
                // $user_id = $pin['user_id'];
                $has_user = User::find($user_id);
                if(!empty($has_user)){
                    $has_user->password = Hash::make($create_pin);
                    $has_user->save();  

                    $messages = [
                        "status" => '200 OK',
                        "message" => 'Success'
                    ];
                    
                    return $messages;
            }
        } else {
            $messages = [
                "status" => '404',
                "message" => 'Something went wrong'
            ];
            return $messages;
        }
    }

    //generate_code for mobile
    public function generateCode(){
        $code = rand(10000000, 99999999);
        $messages = [
            "status" => "200",
            "message" => "success",
            "generate_code" => $code
        ];
        return $messages;
    }

    //package for mobile
    public function package(){
        if(!empty(Package::get())) {
            $packages = Package::get();
            $messages  = [
                "status" => "200",
                "message" => "success",
                "packages" => $packages
            ];

            return $messages;
        } else {
            $messages  = [
                "status" => "500",
                "message" => "something went wrong",
            ];

            return $messages;
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    // }
    
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
