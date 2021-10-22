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

class UserPanelController extends Controller
{
    public function create_contact(Request $request){
        $check = User::where('id', $request->user_id)->first();
        if($check !== null ){
            $image = $request->image;
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
                if($request->hasFile('image')){
                    $imageName = $image->getClientOriginalName();
                    $file_save = Storage::putFileAs('public', $image, $imageName);
                    $exist->image = $imageName;
                } else {
                    $exist->image = $image;
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
                $imageName = $image->getClientOriginalName();
                $file_save = Storage::putFileAs('public', $image, $imageName);
                $contact->image = $imageName;
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
                    $deep_link_to_unactive = DeepLink::where('user_id', $user_id)->where('active', '=', $active)->first();
                    if($deep_link_to_unactive !== null){
                        $deep_link_to_unactive->active = '0';
                        $deep_link_to_unactive->save(); 
    
                        $deep_link_active = DeepLink::where('name','=', $name)->first();
                        if($deep_link_active !== null){
                            $deep_link_active->url = $url;
                            $deep_link_active->active = $active;
                            $deep_link_active->save();
        
                            $messages = [
                                "status" => "200",
                                "message" => "success",
                            ];
                            return $messages;
                        }
                    } else {
                        $messages = [
                            "status" => "500",
                            "message" => "all links are unactive",
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
}
