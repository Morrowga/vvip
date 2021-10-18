<?php

namespace App\Http\Controllers\API;

use Auth;
use App\Models\User;
use App\Models\Package;
use App\Models\HomeInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;

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
                $text = $request->text;
                $image = $request->image;
                if($text !== null && $image !== null){
                    $contact = new Contact();
                    $contact->user_id = $request->user_id;
                    $contact->text = $text;
                    $contact->image = $image;
                    $contact->save();

                    $messages = [
                        "status" => "200",
                        "message" => "success"
                    ];

                    return $messages;
                } else {
                    $messages = [
                        "status" => "500",
                        "message" => "empty",
                    ];
                    return $messages;
                }
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
        if(!empty($user_id)){
            $contact = Contact::where('user_id', '=', $user_id)->get();
            if(!empty($contact)){
                foreach($contact as $contact_data){
                    $data = [
                        "text" => $contact_data->text,
                        "image" => $contact_data->image
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
