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
            $background_color = $request->background_color;
            $text_color = $request->text_color;
            $text_highlight_color = $request->text_highlight_color;
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
                $exist->background_color  = $background_color;
                $exist->text_color = $text_color;
                $exist->text_highlight_color = $text_highlight_color;
                if($image){
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
                $contact->background_color  = $background_color;
                $contact->text_color = $text_color;
                $contact->text_highlight_color = $text_highlight_color;
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
                if($active === "0"){
                    $deep_link_active = DeepLink::where('name', '=', $name)->where('user_id', '=', $user_id)->first();
                    $deep_link_active->url = $url;
                    $deep_link_active->save();

                    $deep_latest = DeepLink::orderBy('updated_at', 'DESC')->get();
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
                    $deep_link_to_unactive = DeepLink::where('user_id', $user_id)->where('active', '=', $active)->first();
                    if($deep_link_to_unactive !== null){
                       $deep_link_active = DeepLink::where('name', '=', $name)->where('user_id', '=', $user_id)->first();
                       $deep_link_to_unactive->active = '0';
                       $deep_link_to_unactive->save(); 
   
                       $deep_link_active->url = $url;
                       $deep_link_active->active = $active;
                       $deep_link_active->save();

                       $deep_latest = DeepLink::orderBy('updated_at', 'DESC')->get();
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
                           $deep_link_active = DeepLink::where('name', '=', $name)->where('user_id', '=', $user_id)->first();
                           $deep_link_active->url = $url;
                           $deep_link_active->active = $active;
                           $deep_link_active->save();

                           $deep_latest = DeepLink::orderBy('updated_at', 'DESC')->get();
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
            if($data_module->request_name === null && $data_module->request_name === ""){
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
        if($request){
            $userid = $request->user_id;
            $request_name = $request->request_name;
            $checkexist = SelectedView::where('user_id', $userid)->first();
            if($checkexist === null){
                $new_active = new SelectedView();
                $new_active->user_id = $userid;
                $new_active->request_name = $request_name;
                $new_active->save();
    
                $messages = [
                    "status" => "200",
                    "message" => "success new",
                    "data" => $new_active
                ];
                return $messages;
            } else {
                $checkexist->request_name = $request_name;
                $checkexist->save();

                $messages = [
                    "status" => "200",
                    "message" => "success update",
                    "data" => $checkexist
                ];
                return $messages;
            }
            
        } else {
            $messages = [
                "status" => "400",
                "message" => "request does not exist"
            ];
            return $messages;
        }
    }
}
