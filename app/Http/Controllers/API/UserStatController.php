<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserDevice;
use App\Models\UserStat;
use DateTime;
use Illuminate\Http\Request;

class UserStatController extends Controller
{
    //
    public function index()
    {

    }
    public function get_device_info(Request $requset)
    {
        $user_device = UserStat::create([
            "user_id" => $requset->user_id,
            "user_ip" => $requset->user_ip,
            "user_os" => $requset->user_os,
            "user_browser" => $requset->user_browser,
            "user_agent" => $requset->user_agent,
            "social_media" => $requset->social_media,
            "device_ip" => $requset->device_ip,
            "device_id" => $requset->device_id,
            "device_name" => $requset->device_name,
            "nfc_support" => $requset->nfc_support,
            "used_at" => date('Y-m-d H:i:s',strtotime($requset->used_at))
        ]);

        if($user_device){
            return array(
                'success' => true
            );
        }
        return array(
            'success' => false
        );
    }
    public function user_stat($id)
    {

    }
}
