<?php
namespace App\Helpers;
use App\Models\DeepLink;
use App\Models\Contact;
use App\Models\Eusp;
use App\Models\LinkTree;
use App\Models\SelectedView;
use App\Models\User;

class Helper{
    
    public static function getData($request_name,$user_id){
        if($request_name !== null){
            if($request_name === "get_contacts"){
                $array = [];
                $contact_data = Contact::where('user_id', '=', $user_id)->first();
                if(!empty($contact_data)){
                    $data = [
                        "image" =>  "storage/contact_images/" . $contact_data->image,
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
                    $data = [
                        "image" =>  "images/logo.jpeg",
                        "personal" => [
                            "first_name" => "",
                            "last_name" => "",
                            "company" => "",
                            "position" => "",
                            "birthday" => ""
                        ],
                        "mobile" => [
                            "mobile" => "",
                            "phone" => "",
                            "office" => ""
                        ],
                        "email_and_internet" => [
                            "personalemail" => "",
                            "office_email" => "",
                            "website_one" => "",
                            "website_two" => "",
                            "website_three" => ""
                        ],
                        "home_address" => [
                            "street_one" => "",
                            "street_two" => "",
                            "postal_code" => "",
                            "city" => "",
                            "state" => "",
                            "country" => ""
                        ],
                        "work_address" => [
                            "street_one" => "",
                            "street_two" => "",
                            "postal_code" => "",
                            "city" =>"",
                            "state" => "",
                            "country" => ""
                        ],
                    ];
    
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "contacts",
                        "data" => $data
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
                         "url" => $data->url,
                         "app_package" => $data->app_package
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
                        "status" => "412",
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
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "data does not exist in this id",
                        "request" => "eusp",
                    ];
                    return $messages;
                }
            } else if($request_name === "get_selected_action"){
                $get_select = SelectedView::where('user_id', $user_id)->first();
                if(!empty($get_select)){
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_selected_action",
                        "data" => $get_select
                    ];
                    return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "data does not exist in this id",
                        "request" => "get_selected_action",
                    ];
                    return $messages;
                }
            } else if($request_name === "get_user_profile"){
                $user_check = User::where('id', $user_id)->first();
                if($user_check !== null){
                    $data = [
                        "user_id" => $user_check->id,
                        "name" => $user_check->name,
                        "email" => $user_check->email,
                        "phone_number" => $user_check->phone_number,
                        "url" => $user_check->url,
                        "profile_image" => $user_check->profile_image,
                        "secure_status" => $user_check->secure_status,
                        "package" => $user_check->package,
                        "package_status" => $user_check->package_status,
                        "remaining_days" => $user_check->remaining_days,
                    ];
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_user_profile",
                        "data" => $data
                    ];

                    return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "User does not exist",
                        "request" => "get_user_profile",
                    ];

                    return $messages;
                }
            } else if($request_name === "get_link_trees"){
                $user_check = User::where('id', $user_id)->first();
                if($user_check !== null){
                    $link_tree = LinkTree::where('user_id', $user_id)->first();
                    if($link_tree !== null){
                        $de_link_one = json_decode($link_tree->link_one);
                        $de_link_two = json_decode($link_tree->link_two);
                        $de_link_three = json_decode($link_tree->link_three);
                        $de_link_four = json_decode($link_tree->link_four);
                        $de_link_five = json_decode($link_tree->link_five);
                        
                        if($link_tree->link_image === null){
                            $link_img = "images/logo.jpeg";
                            $final_data = [
                                "user_id"  => $link_tree->user_id,
                                "link_image" => $link_img,
                                "link_one_label" => $de_link_one->label,
                                "link_one_url" => $de_link_one->link,
                                "link_two_label" => $de_link_two->label,
                                "link_two_url" => $de_link_two->link,
                                "link_three_label" => $de_link_three->label,
                                "link_three_url" => $de_link_three->link,
                                "link_four_label" => $de_link_four->label,
                                "link_four_url" => $de_link_four->link,
                                "link_five_label" => $de_link_five->label,
                                "link_five_url" => $de_link_five->link,
                                "background_color" => $link_tree->background_color,
                                "text_color" => $link_tree->text_color,
                                "text_highlight_color" => $link_tree->text_highlight_color
                              ];
                              $messages = [
                                "status" => "200",
                                "message" => "success",
                                "request" => "get_link_trees",
                                "data" => $final_data
                            ];
        
                            return $messages;
                        } else {
                            $link_img = "storage/link_tree_images/" . $link_tree->link_image;
                            $final_data = [
                                "user_id"  => $link_tree->user_id,
                                "link_image" => $link_img,
                                "link_one_label" => $de_link_one->label,
                                "link_one_url" => $de_link_one->link,
                                "link_two_label" => $de_link_two->label,
                                "link_two_url" => $de_link_two->link,
                                "link_three_label" => $de_link_three->label,
                                "link_three_url" => $de_link_three->link,
                                "link_four_label" => $de_link_four->label,
                                "link_four_url" => $de_link_four->link,
                                "link_five_label" => $de_link_five->label,
                                "link_five_url" => $de_link_five->link,
                                "background_color" => $link_tree->background_color,
                                "text_color" => $link_tree->text_color,
                                "text_highlight_color" => $link_tree->text_highlight_color
                              ];
                              $messages = [
                                "status" => "200",
                                "message" => "success",
                                "request" => "get_link_trees",
                                "data" => $final_data
                            ];
        
                            return $messages;
                        }
                    } else {
                        $messages = [
                            "status" => "412",
                            "message" => "data does not exist",
                            "request" => "get_link_trees",
                        ];
    
                        return $messages;
                    } 
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "User does not exist",
                        "request" => "get_link_tree",
                    ];

                    return $messages;
                }
            } else if($request_name === "get_welcome"){
                $user  = User::where('id', $user_id)->first();
                if($user !== null){
                    $data  = [
                        "user_name" => $user->name,
                        "text" => "Hello " . $user->name . ",Welcome from VVIP9.co. You can create smart content right now! You are my VVIP."
                    ];
        
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_welcome",
                        "data" => $data
                     ];
        
                     return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "User does not exist."
                     ];
        
                     return $messages;
                }
            }
        }
    }
}

