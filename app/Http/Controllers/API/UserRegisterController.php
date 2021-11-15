<?php

namespace App\Http\Controllers\API;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use App\Models\UserLog;
use App\Models\HomeInfo;
use App\Models\WaitingTime;
use Illuminate\Http\Request;
use App\Models\SmartCardDesign;
use App\Http\Controllers\Controller;
use App\Models\DeepLink;
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
                        
                        
                        // $links = ['Facebook', 'Instagram', 'Youtube', 'Tiktok', 'Pinterest', 'LinkedIn', 'Tripadvisor','Zoom','Google Maps','Vimeo','Amazon'];
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


    public function card_designs(Request $request){
        $take_request = $request->take_request;
        if($take_request == 'all'){
            $cards = SmartCardDesign::get();
            $array = [];
            foreach($cards as $card){
                $data = [
                        "id" => $card->id,
                        "front_image" => $card->front_image,
                        "back_image" => $card->back_image,
                        "package_token" => $card->package_token,
                        "default_front_transparent" => $card->default_front_transparent,
                        "default_back_transparent" => $card->default_back_transparent,
                        "bg_color" => $card->preview_bg_color,
                        "text_color" => $card->preview_text_color,
                ];
                array_push($array, $data);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "card_design" => $array,
                    "total" => $card->total_transparent
                ];
                return $messages;
            } 
        } else if($take_request == 'normal'){
            $package = Package::where('package_name', $take_request)->first();
            $cards = SmartCardDesign::where('package_token', $package->token)->get();
            $array = [];
            if(!$cards->count() <= 0)
            foreach ($cards as $card) {
                $data = [
                        "id" => $card->id,
                        "front_image" => $card->front_image,
                        "back_image" => $card->back_image,
                        "package_token" => $card->package_token,
                        "default_front_transparent" => $card->default_front_transparent,
                        "default_back_transparent" => $card->default_back_transparent,
                        "bg_color" => $card->preview_bg_color,
                        "text_color" => $card->preview_text_color,
                ];
                array_push($array, $data);
            $messages = [
                "status" => "200",
                "message" => "success",
                "card_design" => $array,
                "total" => $card->total_transparent
            ];
            return $messages;
            } else {
                $messages = [
                    "status" => "412",
                    "message" => "no data",
                ];
                return $messages;
            }
        } else if($take_request == 'standard'){
            $package = Package::where('package_name', $take_request)->first();
            $cards = SmartCardDesign::where('package_token', $package->token)->get();
            $array = [];
            // return $cards->count();
            if(!$cards->count() <= 0){
                foreach ($cards as $card) {
                    $data = [
                            "id" => $card->id,
                            "front_image" => $card->front_image,
                            "back_image" => $card->back_image,
                            "package_token" => $card->package_token,
                            "default_front_transparent" => $card->default_front_transparent,
                            "default_back_transparent" => $card->default_back_transparent,
                            "bg_color" => $card->preview_bg_color,
                            "text_color" => $card->preview_text_color,
                    ];
                    array_push($array, $data);
                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "card_design" => $array,
                    "total" => $card->total_transparent
                ];
                return $messages;
                }
            } else {
                $messages = [
                    "status" => "412",
                    "message" => "no data",
                ];
                return $messages;
            }
        } else if($take_request == 'luxury'){
            $package = Package::where('package_name', $take_request)->first();
            $cards = SmartCardDesign::where('package_token', $package->token)->get();
            $array = [];
            if(!$cards->count() <= 0){
                foreach ($cards as $card) {
                    $data = [
                            "id" => $card->id,
                            "front_image" => $card->front_image,
                            "back_image" => $card->back_image,
                            "package_token" => $card->package_token,
                            "default_front_transparent" => $card->default_front_transparent,
                            "default_back_transparent" => $card->default_back_transparent,
                            "bg_color" => $card->preview_bg_color,
                            "text_color" => $card->preview_text_color,
                    ];
                    array_push($array, $data);
                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "card_design" => $array,
                    "total" => $card->total_transparent
                ];
                return $messages;
                }
            } else {
                $messages = [
                    "status" => "412",
                    "message" => "no data",
                ];
                return $messages;
            }
        }
    }


    public function get_card_by_id(Request $request, $id = null){
        $id = $request->id;
        $card = SmartCardDesign::where('id', $id)->first();
        if($card !== null){
            $data = [
                "id" => $card->id,
                "front_image" => $card->front_image,
                "back_image" => $card->back_image,
                "package_token" => $card->package_token,
                "default_front_transparent" => $card->default_front_transparent,
                "default_back_transparent" => $card->default_back_transparent,
                "bg_color" => $card->preview_bg_color,
                "text_color" => $card->preview_text_color,
            ];
            $messages = [
                "status" => "200",
                "message" => "success",
                "data" => $data,
                "total" => json_decode($card->total_transparent)
            ];
            return $messages;
        } else {
            $messages = [
                "status" => "400",
                "message" => "bad request",
            ];
            return $messages;
        }
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
                        // $dtF = new \DateTime('@0');
                        // $dtT = new \DateTime("@$remaining");
                        //$dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
                        $time->time_left =  $remaining;
                        $time->save();
    
                       
                        $data = HomeInfo::get();
                        $array = [];
                        foreach($data as $d){
                            $home_data = [
                                "id" => $d->id,
                                "text" => $d->text,
                                "image" => $d->image
                            ];
                            array_push($array, $home_data);
                        }
    
                        $messages = [
                            'status' => '200',
                            'message' => 'success',
                            'countdown_left' => $time->time_left,
                            'total_seconds' => $remaining,
                        ];
                        return $messages;
                    } else {
                        $remaining_update = strtotime($wait_time->time_left) -  strtotime('now');
                        $update_to = WaitingTime::find($wait_time->id);
                        $update_to->time_left = $remaining_update;
                        $update_to->save();
        
                        $data = HomeInfo::get();
                        $array = [];
                        foreach($data as $d){
                            $home_data = [
                                "id" => $d->id,
                                "text" => $d->text,
                                "image" => $d->image
                            ];
                            array_push($array, $home_data);
                        }
                        
                        $messages = [
                                'status' => '200',
                                'message' => 'success',
                                'countdown_left' => $update_to->time_left,
                                'total_seconds' => $remaining_update,
                                'home_page' => $array,
                            ];
                            return $messages;
                    }
            } else {
                $messages = [
                    'status' => '500',
                    'message' => 'user does not exist.',
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
