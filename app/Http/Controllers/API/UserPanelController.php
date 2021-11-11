<?php

namespace App\Http\Controllers\API;

use Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\Package;
use App\Models\HomeInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeepLink;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Helper;
use App\Models\Action;
use App\Models\Eusp;
use App\Models\LinkTree;
use App\Models\SelectedView;

class UserPanelController extends Controller
{
    public function create_contact(Request $request){
        $check = User::where('id', $request->user_id)->first();
        if($check !== null ){
            $image = $request->file('image');
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $company = $request->company;
            $position = $request->position;
            $mobile = $request->mobile;
            $phone = $request->phone;
            $office = $request->office;
            $birthday = $request->birthday;
            $personalemail = $request->personalemail;
            $office_email = $request->office_email;
            $website1 = $request->website1;
            $website2 = $request->website2;
            $website3 = $request->website3;
            $home_street1 = $request->home_street1;
            $home_street2 = $request->home_street2;
            $home_postal_code = $request->home_postal_code;
            $home_city = $request->home_city;
            $home_state = $request->home_state;
            $home_country = $request->home_country;
            $work_street1 = $request->work_street1;
            $work_street2 = $request->work_street2;
            $work_postal_code = $request->work_postal_code;
            $work_city = $request->work_city;
            $work_state = $request->work_state;
            $work_country = $request->work_country;
            // $background_color = $request->background_color;
            // $text_color = $request->text_color;
            // $text_highlight_color = $request->text_highlight_color;
            $exist = Contact::where('user_id', '=', $request->user_id)->first();
            if ($exist !== null) {
                $exist->first_name = $first_name;
                $exist->last_name = $last_name;
                $exist->birthday = $birthday;
                $exist->company = $company;
                $exist->position = $position;
                $exist->mobile = $mobile;
                $exist->phone = $phone;
                $exist->office = $office;
                $exist->personalemail =$personalemail;
                $exist->office_email = $office_email;
                $exist->website1 = $website1;
                $exist->website2 = $website2;
                $exist->website3 = $website3;
                $exist->home_street1 = $home_street1;
                $exist->home_street2 = $home_street2;
                $exist->home_postal_code = $home_postal_code;
                $exist->home_city = $home_city;
                $exist->home_state = $home_state;
                $exist->home_country = $home_country;
                $exist->work_street1 = $work_street1;
                $exist->work_street2 = $work_street2;
                $exist->work_postal_code = $work_postal_code;
                $exist->work_city = $work_city;
                $exist->work_state = $work_state;
                $exist->work_country = $work_country;
                // $exist->background_color  = $background_color;
                // $exist->text_color = $text_color;
                // $exist->text_highlight_color = $text_highlight_color;
                if($request->hasfile('image')){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('contact_images', $imageName, 'public');
                    $exist->image = $imageName;
                } 
                $exist->save();
    
                $messages = [
                    "status" => "200",
                    "message" => "success"
                ];
    
                return $messages;
            } else {
                $contact = new Contact;
                $contact->user_id = $request->user_id;
                $contact->first_name = $first_name;
                $contact->last_name = $last_name;
                $contact->birthday = $birthday;
                $contact->company = $company;
                $contact->position = $position;
                $contact->mobile = $mobile;
                $contact->phone = $phone;
                $contact->office = $office;
                $contact->personalemail =$personalemail;
                $contact->office_email = $office_email;
                $contact->website1 = $website1;
                $contact->website2 = $website2;
                $contact->website3 = $website3;
                $contact->home_street1 = $home_street1;
                $contact->home_street2 = $home_street2;
                $contact->home_postal_code = $home_postal_code;
                $contact->home_city = $home_city;
                $contact->home_state = $home_state;
                $contact->home_country = $home_country;
                $contact->work_street1 = $work_street1;
                $contact->work_street2 = $work_street2;
                $contact->work_postal_code = $work_postal_code;
                $contact->work_city = $work_city;
                $contact->work_state = $work_state;
                $contact->work_country = $work_country;
                // $contact->background_color  = $background_color;
                // $contact->text_color = $text_color;
                // $contact->text_highlight_color = $text_highlight_color;
                if($image){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('contact_images', $imageName, 'public');
                    $contact->image = $imageName;
                } 
                $contact->save();

                $messages = [
                    "status" => "200",
                    "message" => "success"
                ];
    
                return $messages;
            }
        } else {
            $messages = [
                "status" => "400",
                "message" => "user_id does not exist"
            ];

            return $messages;
        }
    }

    public function getRequestData(Request $request){
        $user_id = $request->user_id;
        $check = User::where('id', $user_id)->first();
        $request_name = $request->request_name;
        if($check !== null){
            if($request_name !== null){
                return Helper::getData($request_name, $user_id);
             } else {
                 $messages = [
                     "status" => "400",
                     "message" => "Need Request Name."
                 ];
                 return $messages;
             }
        } else {
            $messages = [
                "status" => "400",
                "message" => "User Id does not exist."
            ];
            return $messages;
        }
    } 

    public function createDeepLink(Request $request){
        if($request){
            $user_id = $request->user_id;
            $url = $request->url;
            $name = $request->name;
            $active = $request->active;
            $user_has = User::where('id', '=', $user_id)->first();
            if($user_has !== null){
                if($active === "1"){

                    $deep_link_where_active = DeepLink::where('user_id', $user_id)->where('active', '=', $active)->first();
                    if($deep_link_where_active !== null){
                        $deep_link_where_active->active = 0;
                        $deep_link_where_active->save();

                        $deep_link_update_active = DeepLink::where('user_id', $user_id)->where('name', '=', $name)->first();
                        $deep_link_update_active->url = $url;
                        $deep_link_update_active->active = $active;
                        $deep_link_update_active->save();

                       $deep_latest = DeepLink::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();
                       $link_data = [];
                       foreach($deep_latest as $deep){
                           $data = [
                               'id' => $deep->id,
                               'name' => $deep->name,
                               'url' => $deep->url,
                               'active' => $deep->active,
                           ];
                           array_push($link_data, $data);
                       }
   
                       $messages = [
                           "status" => "200",
                           "message" => "success",
                           "data" => $link_data
                       ];
                       return $messages;
                   } else {
                           $deep_link_update_active = DeepLink::where('user_id', $user_id)->where('name', '=', $name)->first();
                           $deep_link_update_active->url = $url;
                           $deep_link_update_active->active = $active;
                           $deep_link_update_active->save();

                           $deep_latest = DeepLink::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();
                           $link_data = [];
                           foreach($deep_latest as $deep){
                               $data = [
                                   'id' => $deep->id,
                                   'name' => $deep->name,
                                   'url' => $deep->url,
                                   'active' => $deep->active,
                               ];
                               array_push($link_data, $data);
                           }
       
                           $messages = [
                               "status" => "200",
                               "message" => "success",
                               "data" => $link_data
                           ];
                           return $messages;
                       }
                } else {
                    $deep_link_active = DeepLink::where('name', '=', $name)->where('user_id', '=', $user_id)->first();
                    $deep_link_active->url = $url;
                    $deep_link_active->save();

                    $deep_latest = DeepLink::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();
                    $link_data = [];
                    foreach($deep_latest as $deep){
                        $data = [
                            'id' => $deep->id,
                            'name' => $deep->name,
                            'url' => $deep->url,
                            'active' => $deep->active,
                        ];
                        array_push($link_data, $data);
                    }
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "data" => $link_data
                    ];
                    return $messages;
                }
            } else {
                $messages = [
                    "status" => "500",
                    "message" => "User_id does not exist or wrong",
                ];
                return $messages;
            }
        }
    }

    public function displayUserWant($url){
        $user = User::where('url', $url)->first();
        if($user !== null){
            $data_module = SelectedView::where('user_id', $user->id)->first();
            if(empty($data_module->request_name)){
                $messages = [
                    "message" => 'Any Action is not Active'
                ];
                return view('vvip_customers.select_view', compact('data_module', 'messages'));
            } else {
                    return view('vvip_customers.select_view', compact('data_module'));
            }
        } else {
            return abort(404);
        }
    }


    public function changeAction(Request $request){
            $userid = $request->user_id;
            $user_exist = User::where('id', '=', $userid)->first();
            if($user_exist !== null){
                $request_name = $request->request_name;
                $self_request = $request->self_request_name;
                $checkexist = SelectedView::where('user_id', '=',$userid)->first();
                if($checkexist === null){
                        $new_active = new SelectedView();
                        $new_active->user_id = $userid;
                        $new_active->request_name = $request_name;
                        $new_active->self_request;
                        $new_active->save();
            
                        $messages = [
                            "status" => "200",
                            "message" => "success new",
                            "data" => $new_active,
                        ];
                        return $messages;
                   
                } else {
                    $checkexist->request_name = $request_name;
                    $checkexist->self_request_name = $self_request;
                    $checkexist->save();
        
                    $messages = [
                            "status" => "200",
                            "message" => "success update",
                            "data" => $checkexist,
                        ];
                    return $messages;
                }
            } else {
                $messages = [
                    "status" => "400",
                    "message" => "user does not exist"
                ];
                return $messages;
            }
    }

    public function getChangeAction(Request $request){
       $get_action = Action::get();
       $array = [];
       foreach($get_action as $action){
           $data = [
                "id" => $action->id,
                "name" => $action->name,
                "action_image" => $action->action_image,
                "request_name" => $action->request_name,
                "self_request_name" => $action->self_request_name
           ];
           array_push($array, $data);
       }

       $messages = [
            "status" => "200",
            "message" => "success",
            "data" => $array
       ];

       return $messages;
    }

    public function create_url(Request $request){
        if($request){
            $userid = $request->user_id;
            $url = $request->url;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_url = new Eusp();
                $create_url->user_id = $userid;
                $create_url->url = $url;
                $create_url->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "url" => $create_url->url
                ];
                return $messages;
            } else {
                $check->url = $url;
                $check->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "url" => $check->url
                ];
                return $messages;
            }
        }
    }

    public function create_sms(Request $request){
        if($request){
            $userid = $request->user_id;
            $sms_no = $request->sms_no;
            $sms_text = $request->sms_text;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_sms = new Eusp();
                $create_sms->user_id = $userid;
                $create_sms->sms_no = $sms_no;
                $create_sms->sms_text = $sms_text;
                $create_sms->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "sms_no" => $create_sms->sms_no,
                    "sms_text" => $create_sms->sms_text
                ];
                return $messages;
            } else {
                $check->sms_no = $sms_no;
                $check->sms_text = $sms_text;
                $check->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "sms_no" => $check->sms_no,
                    "sms_text" => $check->sms_text
                ];
                return $messages;
            }
        }
    }

    public function create_email(Request $request){
        if($request){
            $userid = $request->user_id;
            $email_address = $request->email_address;
            $email_subject = $request->email_subject;
            $email_body = $request->email_body;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_email = new Eusp();
                $create_email->user_id = $userid;
                $create_email->email_address = $email_address;
                $create_email->email_subject = $email_subject;
                $create_email->email_body = $email_body;
                $create_email->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "email_address" => $create_email->email_address,
                    "email_subject" => $create_email->email_subject,
                    "email_body" => $create_email->email_body,
                ];
                return $messages;
            } else {
                $check->email_address = $email_address;
                $check->email_subject = $email_subject;
                $check->email_body = $email_body;
                $check->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "email_address" => $check->email_address,
                    "email_subject" => $check->email_subject,
                    "email_body" => $check->email_body,
                ];
                return $messages;
            }
        }
    }

    public function create_phone(Request $request){
        if($request){
            $userid = $request->user_id;
            $phone = $request->phone;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_phone = new Eusp();
                $create_phone->user_id = $userid;
                $create_phone->phone = $phone;
                $create_phone->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "data" => $create_phone->phone
                ];
                return $messages;
            } else {
                $check->phone = $phone;
                $check->save();

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "phone" => $check->phone
                ];
                return $messages;
            }
        }
    }

    public function create_appearance(Request $request){
        $user_id = $request->user_id;
        $background_color = $request->background_color;
        $text_color = $request->text_color;
        $text_highlight_color = $request->text_highlight_color;

        $check_user = User::where('id', $user_id)->first();

        if($check_user !== null){
            $contact_exist = Contact::where('user_id', $check_user->id)->first();
            $link_tree_exist = LinkTree::where('user_id', $check_user->id)->first();
            if($contact_exist !== null){
                $contact_exist->background_color = $background_color;
                $contact_exist->text_color = $text_color;
                $contact_exist->text_highlight_color = $text_highlight_color;
                $contact_exist->save();
            } else {
                $contact_new = new Contact();
                $contact_new->user_id = $user_id;
                $contact_new->background_color = $background_color;
                $contact_new->text_color = $text_color;
                $contact_new->text_highlight_color = $text_highlight_color;
                $contact_new->save();
            }

            if($link_tree_exist !== null){
                $link_tree_exist->background_color = $background_color;
                $link_tree_exist->text_color = $text_color;
                $link_tree_exist->text_highlight_color = $text_highlight_color;
                $link_tree_exist->save();
            } else {
                $link_new = new LinkTree();
                $link_new->user_id = $user_id;
                $link_new->background_color = $background_color;
                $link_new->text_color = $text_color;
                $link_new->text_highlight_color = $text_highlight_color;
                $link_new->save();
            }

            $messages = [
                "status" => "200",
                "message" => "success",
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


    public function create_link_tree(Request $request){
        $link_one_label = $request->link_one_label;
        $link_one_url = $request->link_one_url;
        $link_two_label = $request->link_two_label;
        $link_two_url = $request->link_two_url;
        $link_three_label = $request->link_three_label;
        $link_three_url = $request->link_three_url;
        $link_four_label = $request->link_four_label;
        $link_four_url = $request->link_four_url;
        $link_five_label = $request->link_five_label;
        $link_five_url = $request->link_five_url;
        $user_id = $request->user_id;
        $image = $request->file('link_image');
        $check_user = User::where('id', $user_id)->first();
        if($check_user !== null){
            $data_one = [
                "label" => $link_one_label,
                "link" => $link_one_url
            ];

            $data_two = [
                "label" => $link_two_label,
                "link" => $link_two_url
            ];
            
            $data_three = [
                "label" => $link_three_label,
                "link" => $link_three_url
            ];

            $data_four = [
                "label" => $link_four_label,
                "link" => $link_four_url
            ];

            $data_five = [
                "label" => $link_five_label,
                "link" => $link_five_url
            ];

            $link_exist = LinkTree::where('user_id', $check_user->id)->first();

            if($link_exist !== null){
                $link_exist->link_one = json_encode($data_one);
                $link_exist->link_two = json_encode($data_two);
                $link_exist->link_three = json_encode($data_three);
                $link_exist->link_four = json_encode($data_four);
                $link_exist->link_five = json_encode($data_five);
                if($request->hasfile('link_image')){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('link_tree_images', $imageName, 'public');
                    $link_exist->link_image = $imageName;
                } 
                $link_exist->save();

                $de_link_one = json_decode($link_exist->link_one);
                $de_link_two = json_decode($link_exist->link_two);
                $de_link_three = json_decode($link_exist->link_three);
                $de_link_four = json_decode($link_exist->link_four);
                $de_link_five = json_decode($link_exist->link_five);

                $final_data = [
                  "user_id"  => $link_exist->user_id,
                  "link_image" => $link_exist->link_image,
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
                ];

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "data" => $final_data
                 ];
    
                 return $messages;
            } else {
                $new_link = new LinkTree();
                $new_link->user_id = $user_id;
                $new_link->link_one = json_encode($data_one);
                $new_link->link_two = json_encode($data_two);
                $new_link->link_three = json_encode($data_three);
                $new_link->link_four = json_encode($data_four);
                $new_link->link_five = json_encode($data_five);
                if($request->hasfile('link_image')){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('link_tree_images', $imageName, 'public');
                    $new_link->link_image = $imageName;
                } 
                $new_link->save();

                $de_link_one = json_decode($new_link->link_one);
                $de_link_two = json_decode($new_link->link_two);
                $de_link_three = json_decode($new_link->link_three);
                $de_link_four = json_decode($new_link->link_four);
                $de_link_five = json_decode($new_link->link_five);

                $final_data = [
                  "user_id"  => $new_link->user_id,
                  "link_image" => $new_link->link_image,
                  "link_one_label" => $de_link_one->label,
                  "link_one_url" => $de_link_one->link,
                  "link_two_label" => $de_link_two->label,
                  "link_two_url" => $de_link_two->link,
                  "link_three_label" => $de_link_three->label,
                  "link_three_url" => $de_link_three->link,
                  "link_four_label" => $de_link_four->label,
                  "link_four_url" => $de_link_four->link,
                  "link_four_label" => $de_link_five->label,
                  "link_four_url" => $de_link_five->link,
                ];

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "data" => $final_data
                 ];
    
                 return $messages;
            }
        } else {
            $messages = [
                "status" => "412",
                "message" => "User does not exist."
             ];

             return $messages;
        }
    }

}

