<?php
namespace App\Helpers;
use App\Models\DeepLink;
use App\Models\Contact;
use App\Models\Eusp;
use App\Models\User;

class Helper{
    
    public static function getData($request_name,$user_id){
        if($request_name !== null){
            if($request_name === "get_contacts"){
                $array = [];
                $contact_data = Contact::where('user_id', '=', $user_id)->first();
                if(!empty($contact_data)){
                    $data = [
                        "image" =>  "http://vvip9.co/storage/contact_images/" . $contact_data->image,
                        "personal" => [
                            "first_name" => $contact_data->first_name,
                            "last_name" => $contact_data->last_name,
                            "company" => $contact_data->company,
                            "position" => $contact_data->position,
                            "birthday" => $contact_data->birthday
                        ],
                        "mobile" => [
                            "mobile" => $contact_data->mobile,
                            "phone" => $contact_data->phone,
                            "office" => $contact_data->office
                        ],
                        "email_and_internet" => [
                            "personalemail" => $contact_data->personalemail,
                            "office_email" => $contact_data->office_email,
                            "website_one" => $contact_data->website1,
                            "website_two" => $contact_data->website2,
                            "website_three" => $contact_data->website3
                        ],
                        "home_address" => [
                            "street_one" => $contact_data->home_street1,
                            "street_two" => $contact_data->home_street2,
                            "postal_code" => $contact_data->home_postal_code,
                            "city" => $contact_data->home_city,
                            "state" => $contact_data->home_state,
                            "country" => $contact_data->home_country
                        ],
                        "work_address" => [
                            "street_one" => $contact_data->work_street1,
                            "street_two" => $contact_data->work_street2,
                            "postal_code" => $contact_data->work_postal_code,
                            "city" => $contact_data->work_city,
                            "state" => $contact_data->work_state,
                            "country" => $contact_data->work_country
                        ],
                        "background_color" => $contact_data->background_color,
                        "text_color" => $contact_data->text_color,
                        "text_highlight_color" => $contact_data->text_highlight_color
                    ];
    
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "contacts",
                        "data" => $data
                    ];
                    return $messages;

                } else {
                    $messages = [
                        "status" => "500",
                        "message" => "There is no data in this user_id",
                    ];
                    return $messages;
                }
            } else if($request_name === "get_deep_links"){
                $check_exist_datas = DeepLink::where('user_id','=', $user_id)->get();
                $count = $check_exist_datas->count();
                $get_array = [];
                if($count > 0){
                    foreach($check_exist_datas as $data){
                        $data_array = [
                         "id" => $data->id,
                         "name" => $data->name,
                         "icon" => $data->icon,
                         "active" => $data->active,
                         "url" => $data->url
                        ];
                        array_push($get_array, $data_array);
                    }
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "deep_link",
                        "deep_link" => $get_array
                    ];
                    return $messages; 
                } else {
                    $messages = [
                        "status" => "500",
                        "message" => "Data does not exist in this user",
                    ];
                    return $messages; 
                }    
            } else if($request_name === "get_eusp"){
                $eusp = Eusp::where('user_id', $user_id)->first();
                if(!empty($eusp)){
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "eusp",
                        "data" => $eusp
                    ];
                    return $messages;
                }
            }
        }
    }
}