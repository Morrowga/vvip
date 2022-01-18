<?php

namespace App\Http\Controllers\API;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use GuzzleHttp\Client;
use App\Helpers\Helper;
use App\Models\Package;
use App\Models\Payment;
use App\Models\UserLog;
use App\Models\DeepLink;
use App\Models\HomeInfo;
use App\Models\WaitingTime;
use App\Models\CustomerCard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\SmartCardDesign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Mail\MailController;
use Intervention\Image\Facades\Image as Image;

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
            $encryption_url = $request->encryption_url;
            $secure_status = $request->secure_status;
            $phone = $country_number . $phone_number;
            $pin = $request->pin;
            $smart_card_design_id = $request->smart_card_design_id;

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
                    $user->smart_card_design_id = $smart_card_design_id;
                    $user->encryption_url = $encryption_url;
                    $user->verification_code = random_int(100000, 999999);
                    // $user->package_start_date = Carbon::now();
                    // $user->package_end_date = Carbon::now()->addYear(1);
                    // $remain = $user->package_end_date->diffIndays($user->package_start_date);
                    // $user->remaining_days = $remain;
                    $user->url = $url;
                    $user->secure_status = $secure_status;
                    $user->password = Hash::make($pin);
                    $user->save();
                    
                    // Helper::user_stats('register', 'create', 'users', $user->id);
                    
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

                        // Helper::user_stats('register', 'create', 'deep_links', $deep_link->id);
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

                    // MailController::registerVerifyEmail($user->name, $user->email, $user->verification_code);        
                    
                    
                    $messages = [
                        "status" => '200',
                        "message" => 'Success',
                        "user_id" => $user->id,
                        "verify" => 'Your Accoutn has been created. Please check Email for verify.'
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

    public function otp_mobile(Request $request){
        $code = $request->code;
        $verify = User::where('verification_code', $code)->first();
        if($verify !== null){
            $verify->is_verified = 1;
            $verify->save();
            
            $messages = [
                "status" => "200",
                "message" => "success"
            ];

            return $messages;
        } else {
            $messages = [
                "status" => "424",
                "message" => "failed"
            ];
        }
    }


    public function sendAgain(Request $request){
        $code = $request->encrypt_code;
        $decrypt = Crypt::decryptString($code);
        $code_check = User::where('verification_code', $decrypt)->first();
        if($code_check !== null){
            $code_check->verification_code = random_int(100000, 999999);
            $code_check->save();

            $username = "kotoe@htut.com";
            $hash = "2564861082022776597e279f8912eba8428a4a7f";
    
            // Config variables. Consult http://api.txtlocal.com/docs for more info.
            $test = "0";
    
            // Data for text message. This is the text message data.
            $sender = "VVIP9"; // This is who the message appears to be from.
            $numbers = $code_check->phone_number; // A single number or a comma-seperated list of numbers
            $message = "Hi Welcome from VVIP9. Your OTP Code is " . $code_check->verification_code;
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


            $messages = [
                "status" => "200",
                "message" => "success"
            ]; 
            return $messages;

        } else {
            $messages = [
                "status" => "424",
                "message" => "failed"
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
                // $phone_log = UserLog::where('phone_number', $phone)->orderBy('created_at', 'DESC')->first();
                
                // if($phone_log === null){
                    $save_user = new UserLog;
                    $save_user->name = $username;
                    $save_user->phone_number = $phone;
                    $save_user->save();
                // } else {

                // }
                    
                // Helper::user_stats('save_user', 'create', 'user_logs', $save_user->id);

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
                'message' => 'Request is wrong',
            ];
            return $messages;
        }
    }


    public function countDown(Request $request){
        if($request->user_id){
            $user = User::where('id', '=', $request->user_id)->first();
            if($user !== null){
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
                    'home_page' => $array,
                    'user_image' => 'user_images/' . $user->profile_image,
                    'user_name' => $user->name,
                ];
                return $messages;
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

    public function qr_generate(Request $request){
        $url = $request->url_value;
        $encrypt = Crypt::encryptString($url);
        $get_qr = QrCode::size(500)->format('png')->merge('images/logoround.png', 0.3, true)->errorCorrection('H')->generate("https://vvip9.co/" . $encrypt, public_path('storage/customer_qr/' . $encrypt . '.png'));

        return $encrypt;
    }

    public function user_exists(Request $request){
        if($request->phone_number_exist !== null){
            $user = User::where('phone_number', $request->phone_number_exist)->first();
            if($user === null){
                $messages = [
                    "status" => "200",
                    "message" =>  "success",
                ];
                return $messages;
            } else {
                $messages = [
                    "status" => "403",
                    "message" =>  "Phone Number Exist",
                ];
                return $messages;
            }
        } else if($request->email_exist !== null){
            $user = User::where('email', $request->email_exist)->first();
            if($user === null){
                $messages = [
                    "status" => "200",
                    "message" =>  "success",
                ];
                return $messages;
            } else {
                $messages = [
                    "status" => "403",
                    "message" =>  "Email Address Exist",
                ];
                return $messages;
            }
        } else if($request->url_exist !== null){
            $user = User::where('url', $request->url_exist)->first();
            if($user === null){
                $messages = [
                    "status" => "200",
                    "message" =>  "success",
                ];
                return $messages;
            } else {
                $messages = [
                    "status" => "403",
                    "message" =>  "Requested Name is Exist",
                ];
                return $messages;
            }
        }   
    }


    public function cards($token){
        $client = new Client();
        $request = $client->get('http://admin.vvip9.co/api/get_card/' . $token);
        $response = $request->getBody();
       
        $data = json_decode($response);

        $loot = [];

        // return $data;
        foreach($data->preview_design as $d){
            $pre_front = $d->front_image;
            $pre_back = $d->back_image;
            $front_preview = file_get_contents($pre_front);
            $pre_front_name = substr($pre_front, strrpos($pre_front, '/') + 1);
            $front = Storage::put('public/cards/' . $pre_front_name, $front_preview);

            $back_preview = file_get_contents($pre_back);
            $pre_back_name = substr($pre_back, strrpos($pre_back, '/') + 1);
            $back = Storage::put('public/cards/' . $pre_back_name, $back_preview);

            $cut_path = [
                    "id" => $d->id,
                    "front_image" => $pre_front_name,
                    "back_image" => $pre_back_name
            ];

            array_push($loot, $cut_path);
        }


        $result = [ 
            "preview_design" => $loot
        ];

        return $result;

    }


    public function card_by_id($id = null){
        $client = new Client();
        $request = $client->get('http://admin.vvip9.co/api/getCardbyId/' . $id);
        $response = $request->getBody();

        $data = json_decode($response);

        foreach($data->package_design[0]->front_trans as $front_tran){
            $get_front_tran = file_get_contents($front_tran->front_image);
            $f_tran_name = substr($front_tran->front_image, strrpos($front_tran->front_image, '/') + 1);
            $ftran = Storage::put('public/cards/' . $f_tran_name, $get_front_tran);
        }

        foreach($data->package_design[0]->back_trans as $back_tran){
            $get_back_tran = file_get_contents($back_tran->back_image);
            $b_tran_name = substr($back_tran->back_image, strrpos($back_tran->back_image, '/') + 1);
            $btran = Storage::put('public/cards/' . $b_tran_name, $get_back_tran);
        }

        return $data;
    }


    public function encryptionUrlMobile(Request $request){
        $url = $request->url;
        if($url !== null){
            $en = Crypt::encryptString($url);

        $messages = [
            "status" => "200",
            "message" => "success",
            "data" => $en
        ];

        return $messages;
        }
    }


    public function save_customer_card(Request $request){
        $preview_image = $request->pre;
        $front_transparent_img = $request->tran_f;
        $back_transparent_img = $request->tran_b;
        $package_name = $request->pk_name;
        $customer_url = $request->customer_url;
        $txtcolor = $request->text_color;
        $bgcolor = $request->bg_color;
        $logo = $request->file('logo_img');
        $description = $request->description_text;
        $cardname = $request->cardname_text;
        $position = $request->position_front;
        $qr_position = $request->position_back;

        $save_card =  new CustomerCard;
        $save_card->user_url = $customer_url;
        $save_card->package_name = $package_name;
        $save_card->transparent_front = $front_transparent_img;
        $save_card->transparent_back = $back_transparent_img;
        $save_card->preview_image = $preview_image;
        $save_card->text_color = $txtcolor;
        $save_card->bg_color = $bgcolor;
        if($request->hasfile('logo_img')){
            $imageName = $logo->getClientOriginalName();
            $file_save = $logo->storeAs('customer_cards', $imageName, 'public');
            $save_card->card_logo = $imageName;
        }  else {
            $save_card->card_logo = 'logo.jpeg';
        }
        $save_card->description = $description;
        $save_card->name = $cardname;
        $save_card->position = $position;
        $save_card->qr_position = $qr_position;
        $save_card->save();


        return $save_card;

    }

    public function payment_upload(Request $request){
        $screenshot = $request->screenshot_image;
        $phone = $request->phone;
        $payment_type = $request->payment_type;
        $payment_amount = $request->payment_amount;
        $package = $request->package;
        $ip = $request->ip();
        $locationData = \Location::get('103.135.217.166');
        $place = $locationData->countryName . ',' . $locationData->regionName . ',' . $locationData->cityName;
        $check_exist = Payment::where('phone', $phone)->first();
        if($check_exist === null){
            $status = 'New';
        } else {
            $status = 'Update';
        }
        $payment = new Payment();
        $payment->phone = $phone;
        $payment->payment_type = $payment_type;
        $payment->screenshot_image = $screenshot;
        $payment->package = $package;
        if($request->hasfile('screenshot_image')){
            $imageName = $screenshot->getClientOriginalName();
            $file_save = $screenshot->storeAs('payment_screenshots', $imageName, 'public');
            $payment->screenshot_image = $imageName;
        } 
        $payment->location = $place;
        $payment->ip_address = $ip;
        $payment->status  = $status;
        $payment->payment_amount = $payment_amount;
        $payment->encrypt_phone = sha1($phone);
        $payment->save();

        $noti_url = 'https://fcm.googleapis.com/fcm/send';
        $noti_data = [
            "to" => "/topics/general",
            "data" => [
                "phone" => $payment->phone,
                "payment_type" => $payment->payment_type,
                "location" => $payment->location,
                "time" => $payment->created_at,
                "web_link" => "https://admin.vvip9.co/pymt_by/" . $payment->encrypt_phone,
                "sound" => "https://www.mboxdrive.com/notification.mp3"
                ],
            ];

            $json = json_encode($noti_data);

        $noti_headers = [
            'Authorization: key= AAAAqHafR0Q:APA91bGqxTVBXDNCsOTTb_FRhEViNVHuASEWuDIz_jXmg7g25vawVzs5qjwsaHUBiPqSoWiTBqD7wnDf8R54jwIXIDbiJGm5KGsstfahDfD1nj1yQCLTEsgaqI9GYu5zZzFGp9CkU_7d',
            'Accept: application/json',
            'Content-Type: application/json',
        ];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $noti_url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $noti_headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        $messages = [
            'status' => "200",
            'message' => "success"
        ];

        return $messages;
    }


    public function payment_lists(){
        $payment = Payment::orderBy('created_at', 'DESC')->get();
        
        return response()->json($payment);
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
