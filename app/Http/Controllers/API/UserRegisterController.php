<?php

namespace App\Http\Controllers\API;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use App\Models\WaitingTime;
use Illuminate\Http\Request;
use App\Models\SmartCardDesign;
use App\Http\Controllers\Controller;
use App\Models\UserLog;
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
            $pin = $request->pin;
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
                        $user->password = Hash::make($pin);
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


    public function card_designs(){
        $cards = SmartCardDesign::get();
        $array = [];
        foreach($cards as $card){
            $data = [
                    "id" => $card->id,
                    "front_image" => $card->front_image,
                    "back_image" => $card->back_image
            ];
            array_push($array, $data);
        }

        $messages = [
            "status" => "200",
            "message" => "success",
            "card_design" => $array
        ];
        return $messages;
    }

    public function saveUser(Request $request){
        if(!empty($request)){
            $username = $request->name;
            $phone = $request->phone_number;
            $phone_count = strlen($phone);
            $user = User::where('phone_number', '=', $phone)->first();
            if($user !== null){
                if($user->package_status === 'active'){
                    $messages = [
                        'status' => '500',
                        'message' => 'Phone Number Exist & Active',
                        'Package' => '1'
                    ];
                    return $messages;
                } else {
                    $messages = [
                        'status' => '500',
                        'message' => 'Phone Number Exist & Expired',
                        'Package' => '0'
                    ];
                    return $messages;
                }
            } elseif ($phone_count > 11){
                $messages = [
                    'status' => '400',
                    'message' => 'Phone Number is invalid'
                ];
                return $messages;
            } elseif ($phone_count < 6){
                $messages = [
                    'status' => '400',
                    'message' => 'Phone Number is invalid'
                ];
                return $messages;
            }else {
                $save_user = new UserLog;
                $save_user->name = $username;
                $save_user->phone_number = $phone;
                $save_user->save();

                $messages = [
                    'status' => '200',
                    'message' => 'success',
                    'name' => $save_user->name,
                    'phone_number' => $save_user->phone_number
                ];
                return $messages;
            }
        } else {
            $messages = [
                'status' => '500',
                'message' => 'akhway',
            ];
            return $messages;
        }
    }


    public function countDown(Request $request){
        if($request->user_id){
            $user = User::where('id', '=', $request->user_id)->first();
            if($user !== null){
                $wait_time = WaitingTime::where('user_id', '=', $request->user_id)->first();
                if($wait_time === null){
                    $new_time = date("Y-m-d H:i:s", strtotime('+48 hours'));
                    $time = new WaitingTime();
                    $time->user_id = $request->user_id;
                    $time->target_time = $new_time;
                    $remaining = strtotime($new_time) - strtotime("now");
                    $dtF = new \DateTime('@0');
                    $dtT = new \DateTime("@$remaining");
                    $time->time_left = $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
                    $time->save();
                    
                    $messages = [
                        'status' => '200',
                        'message' => 'success',
                        'countdown_left' => $time->time_left,
                        'total_seconds' => $remaining
                    ];
                    return $messages;
                } else {
                    $remaining_update = strtotime($wait_time->target_time) - strtotime("now");
                    $dtF = new \DateTime('@0');
                    $dtT = new \DateTime("@$remaining_update");
                    $to_update = WaitingTime::find($wait_time->id);
                    $to_update->time_left = $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
                    $to_update->save();

                    $messages = [
                        'status' => '200',
                        'message' => 'success',
                        'countdown_left' => $to_update->time_left,
                        'total_seconds' => $remaining_update
                    ];
                    return $messages;
                }
            } else {
                $messages = [
                    'status' => '400',
                    'message' => 'Id does not exist'
                ];
                return $messages;
            }
        } else {
            $messages = [
                'status' => '500',
                'message' => 'failed'
            ];
            return $messages;
        }
    }

    // public function timeleft(Request $request){
    //     if($request->user_id){
    //         $user = 
    //         if()
    //     }
    //     $save_time = WaitingTime::)
    // }

   
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
