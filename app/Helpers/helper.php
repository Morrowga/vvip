<?php
namespace App\Helpers;
use App\Models\DeepLink;
use App\Models\Contact;
use App\Models\User;

class Helper{
    
    public static function getData($request_name,$user_id){
        if($request_name !== null){
            if($request_name === "get_contacts"){
                $array = [];
                $contact_data = Contact::where('user_id', '=', $user_id)->first();
                if(!empty($contact)){
                    $data = [
                        "image" =>  "http://vvip9.co/storage/" . $contact_data->image,
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
                            "website1" => $contact_data->website1,
                            "website2" => $contact_data->website2,
                            "website3" => $contact_data->website3
                        ]
                    ];
    
                    $messages = [
                        "status" => "200",
                        "message" => "success",
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
            }
        }
    }
}