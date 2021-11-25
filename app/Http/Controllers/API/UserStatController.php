<?php

namespace App\Http\Controllers\API;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\UserDevice;
use App\Models\UserStat;
use App\Models\ViewCount;
use DateTime;
use Facade\FlareClient\View;
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
            "social_media" => "http://vvip9.co/" . $requset->social_media,
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
    public function view_count(Request $requset)
    {
        $view_count = new ViewCount();
        $view_count->page_name = $requset->page_name;

        $exit_page_name = ViewCount::get();
        foreach($exit_page_name as $ex_pg_name){
            if($ex_pg_name->page_name == $requset->page_name){
                $pg_name = $ex_pg_name->page_name;
            }
        }
        if(!empty($pg_name)){
            $count_p = ViewCount::where('page_name',$pg_name)->first();
            // dd($count_p);
                $count_p->increment('mobile');
                $count_p->update();
        }else{
            $count_p = new ViewCount();
            $count_p->page_name = $requset->page_name;
            $count_p->website = $count_p->increment('mobile');
            $count_p->save();
        }
        if($view_count){
            return array(
                'success' => true
            );
        }
        return array(
            'success' => false
        );
    }
}
