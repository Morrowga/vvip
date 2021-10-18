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
    public function home_api(){
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
            "status" => "200",
            "message" => "success",
            "home" => $array
        ];
        

        return $messages;
    }

    public function create_contact(Request $request){
        if($request){
            if($request->user_id){
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
                $filename = substr($image, strrpos($image, '/') + 1);
                $file_save = Storage::disk('public', $image)->put($filename, $image);
                $contact->image = $filename . '/' . $image->getClientOriginalName(); 
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
                        "image" =>  $contact_data->image
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
