<?php

namespace App\Http\Controllers\API;

use Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\Package;
use App\Models\HomeInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserPanelController extends Controller
{
    public function create_contact(Request $request){
        if($request){
            if($request->user_id){
                $image = $request->image;
                $imageName = $image->getClientOriginalName();
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
                $contact = new Contact();
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
                $file_save = Storage::putFileAs('public', $image, $imageName);
                $contact->image = $imageName; 
                $contact->save();

                    $messages = [
                        "status" => "200",
                        "message" => "success"
                    ];

                    return $messages;
                } else {
                $messages = [
                    "status" => "500",
                    "message" => "no user_id",
                ];

                return $messages;
            }
        } else {
            $messages = [
                "status" => "400",
                "message" => "Bad Request"
            ];
        }
    }

    public function getContacts(Request $request){
        $user_id = $request->user_id;
        $array = [];
        //Storage::disk('public', $contact_data->image)->get($filename, $contact_data->image)
        if(!empty($user_id)){
            $contact = Contact::where('user_id', '=', $user_id)->get();
            if(!empty($contact)){
                foreach($contact as $contact_data){
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
                    array_push($array, $data);
                }
                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "data" => $array
                ];
                return $messages;
            } else {
                $messages = [
                    "status" => "500",
                    "message" => "There is no data in this user_id",
                ];
                return $messages;
            }
        } else {
            $messages = [
                "status" => "400",
                "message" => "user_id is wrong",
            ];
            return $messages;
        }
    }
}
