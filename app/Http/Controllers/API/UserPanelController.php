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
        $message = [
            "status" => "200",
            "message" => "success",
            "home" => $data
        ];

        return $message;
    }
}
