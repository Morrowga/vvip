<?php

namespace App\Http\Controllers\API;

use Auth;
use App\Models\User;
use App\Models\Package;
use App\Models\HomeInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $message = [
            "status" => "200",
            "message" => "success",
            "home" => $array
        ];
        

        return $message;
    }
}
