<?php
namespace App\Helpers;
use Carbon\Carbon;
use App\Models\Eusp;
use App\Models\User;
use App\Models\Action;
use App\Models\Contact;
use App\Models\DeepLink;
use App\Models\Event;
use App\Models\LinkTree;
use App\Models\UserStat;
use App\Models\ViewCount;
use App\Models\SelectedView;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Helper{

    public static function getData($request_name,$user_id){
        if($request_name !== null){
            if($request_name === "get_contacts"){
                $array = [];
                $contact_data = Contact::where('user_id', '=', $user_id)->first();
                if(!empty($contact_data)){
                    $data = [
                        "image" =>  "storage/contact_images/" . $contact_data->image,
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
                            "website_one" => $contact_data->website1,
                            "website_two" => $contact_data->website2,
                            "website_three" => $contact_data->website3
                        ],
                        "home_address" => [
                            "street_one" => $contact_data->home_street1,
                            "street_two" => $contact_data->home_street2,
                            "postal_code" => $contact_data->home_postal_code,
                            "city" => $contact_data->home_city,
                            "state" => $contact_data->home_state,
                            "country" => $contact_data->home_country
                        ],
                        "work_address" => [
                            "street_one" => $contact_data->work_street1,
                            "street_two" => $contact_data->work_street2,
                            "postal_code" => $contact_data->work_postal_code,
                            "city" => $contact_data->work_city,
                            "state" => $contact_data->work_state,
                            "country" => $contact_data->work_country
                        ],
                        "background_color" => $contact_data->background_color,
                        "text_color" => $contact_data->text_color,
                        "text_highlight_color" => $contact_data->text_highlight_color
                    ];

                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_contacts",
                        "data" => $data
                    ];
                    return $messages;

                } else {
                    $data = [
                        "image" =>  "images/logo.jpeg",
                        "personal" => [
                            "first_name" => "",
                            "last_name" => "",
                            "company" => "",
                            "position" => "",
                            "birthday" => ""
                        ],
                        "mobile" => [
                            "mobile" => "",
                            "phone" => "",
                            "office" => ""
                        ],
                        "email_and_internet" => [
                            "personalemail" => "",
                            "office_email" => "",
                            "website_one" => "",
                            "website_two" => "",
                            "website_three" => ""
                        ],
                        "home_address" => [
                            "street_one" => "",
                            "street_two" => "",
                            "postal_code" => "",
                            "city" => "",
                            "state" => "",
                            "country" => ""
                        ],
                        "work_address" => [
                            "street_one" => "",
                            "street_two" => "",
                            "postal_code" => "",
                            "city" =>"",
                            "state" => "",
                            "country" => ""
                        ],
                    ];


                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_contacts",
                        "text" => "no data available",
                        "data" => $data
                    ];
                    return $messages;
                }
            } else if($request_name === "get_deep_links"){
                $check_exist_datas = DeepLink::where('user_id','=', $user_id)->get();
                $count = $check_exist_datas->count();
                $get_array = [];
                if($count > 0){
                    foreach($check_exist_datas as $data){
                        if($data->url === null){
                            $data_array = [
                                "id" => $data->id,
                                "name" => $data->name,
                                "icon" => $data->icon,
                                "active" => $data->active,
                                "url" => "",
                                "app_package" => $data->app_package
                               ];
                               array_push($get_array, $data_array);
                        }  else {
                            $data_array = [
                                "id" => $data->id,
                                "name" => $data->name,
                                "icon" => $data->icon,
                                "active" => $data->active,
                                "url" => $data->url,
                                "app_package" => $data->app_package
                               ];
                               array_push($get_array, $data_array);
                        }
                    }

                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_deep_link",
                        "deep_link" => $get_array
                    ];
                    return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "Data does not exist in this user",
                    ];
                    return $messages;
                }
            } else if($request_name === "get_eusp"){
                $eusp = Eusp::where('user_id', $user_id)->first();
                if(!empty($eusp)){
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_eusp",
                        "data" => $eusp
                    ];
                    return $messages;
                } else {
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_eusp",
                        "data" => [
                            "email" => "",
                            "email_subject" => "",
                            "email_body" => "",
                            "phone" => "",
                            "url" => "",
                            "sms_text" => "",
                            "sms_no" => "",
                        ]
                    ];
                    return $messages;
                }
            } else if($request_name === "get_selected_action"){
                $get_select = SelectedView::where('user_id', $user_id)->first();
                if(!empty($get_select)){
                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_selected_action",
                        "data" => $get_select
                    ];
                    return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "data does not exist in this id",
                        "request" => "get_selected_action",
                        "data" => [
                            "self_request_name" => ""
                        ]
                    ];
                    return $messages;
                }
            } else if($request_name === "get_user_profile"){
                $user_check = User::where('id', $user_id)->first();
                $user_image = Contact::where('user_id', $user_id)->first();
                if($user_check !== null){
                    if($user_image !== null){
                        if($user_image->image === null){
                            $data = [
                                "user_id" => $user_check->id,
                                "user_image" => 'images/logo.jpeg' . $user_image->image,
                                "bod" => $user_image->birthday,
                                "name" => $user_check->name,
                                "email" => $user_check->email,
                                "phone_number" => $user_check->phone_number,
                                "url" => "https://vvip9.co/" . $user_check->url,
                                "encryption_url" => $user_check->encryption_url,
                                "profile_image" => $user_check->profile_image,
                                "secure_status" => $user_check->secure_status,
                                "package" => $user_check->package,
                                "package_status" => $user_check->package_status,
                                "remaining_days" => $user_check->remaining_days,
                            ];
                        } else {
                            $data = [
                                "user_id" => $user_check->id,
                                "user_image" => 'storage/contact_images/' . $user_image->image,
                                "name" => $user_check->name,
                                "email" => $user_check->email,
                                "phone_number" => $user_check->phone_number,
                                "url" => "https://vvip9.co/" . $user_check->url,
                                "encryption_url" => $user_check->encryption_url,
                                "profile_image" => $user_check->profile_image,
                                "secure_status" => $user_check->secure_status,
                                "package" => $user_check->package,
                                "package_status" => $user_check->package_status,
                                "remaining_days" => $user_check->remaining_days,
                            ];
                        }
                    } else {
                        $data = [
                            "user_id" => $user_check->id,
                            "user_image" => 'images/logo.jpeg',
                            "name" => $user_check->name,
                            "email" => $user_check->email,
                            "phone_number" => $user_check->phone_number,
                            "url" => "https://vvip9.co/" . $user_check->url,
                            "encryption_url" => $user_check->encryption_url,
                            "profile_image" => $user_check->profile_image,
                            "secure_status" => $user_check->secure_status,
                            "package" => $user_check->package,
                            "package_status" => $user_check->package_status,
                            "remaining_days" => $user_check->remaining_days,
                        ];
                    }

                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_user_profile",
                        "data" => $data,
                    ];

                    return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "User does not exist",
                        "request" => "get_user_profile",
                    ];

                    return $messages;
                }
            } else if($request_name === "get_link_trees"){
                $user_check = User::where('id', $user_id)->first();
                if($user_check !== null){
                    $link_tree = LinkTree::where('user_id', $user_id)->first();
                    if(!empty($link_tree)){
                        $link_img = "storage/link_tree_images/" . $link_tree->link_image;

                        $final_data = [
                          "user_id"  => $link_tree->user_id,
                          "link_image" => $link_img,
                          "link_data" => json_decode($link_tree->links),
                          "background_color" => $link_tree->background_color,
                          "text_color" => $link_tree->text_color,
                          "text_highlight_color" => $link_tree->text_highlight_color
                        ];

                        $messages = [
                            "status" => "200",
                            "message" => "success",
                            "request" => "get_link_trees",
                            "data" => $final_data
                        ];

                        return $messages;

                    } else {
                          $messages = [
                            "status" => "500",
                            "message" => "no data",
                            "request" => "get_link_trees",
                        ];

                        return $messages;
                    }
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "User does not exist",
                        "request" => "get_link_tree",
                    ];

                    return $messages;
                }
            } else if($request_name === "get_welcome"){
                $user  = User::where('id', $user_id)->first();
                if($user !== null){
                    if($user->remaining_days <= 3){
                        $pop_up_text = "Subscription will be expire soon.";
                    }
                    $pop_up_text = "Subscription still active.";

                    $data  = [
                        "user_name" => $user->name,
                        "text" => "Hello " . ucfirst($user->name) . ",Welcome from VVIP9.co. You can create smart content right now! You are my VVIP.",
                        "profile_img" => '../user_images/'. $user->profile_image,
                        "expired_date" => $user->expired_date,
                        "payment_expired_date" => $user->payment_listen_date,
                        "pop_up_text" => $pop_up_text
                    ];

                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "request" => "get_welcome",
                        "data" => $data
                     ];

                     return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "User does not exist."
                     ];

                     return $messages;
                }
            } else if($request_name === "get_cns"){
                $contact = Contact::where('user_id', $user_id)->first();
                $linktree =  LinkTree::where('user_id', $user_id)->first();

                $contact_array = [
                    "image" =>  "storage/contact_images/" . $contact->image,
                    "personal" => [
                        "first_name" => $contact->first_name,
                        "last_name" => $contact->last_name,
                        "company" => $contact->company,
                        "position" => $contact->position,
                        "birthday" => $contact->birthday
                    ],
                    "mobile" => [
                        "mobile" => $contact->mobile,
                        "phone" => $contact->phone,
                        "office" => $contact->office
                    ],
                    "email_and_internet" => [
                        "personalemail" => $contact->personalemail,
                        "office_email" => $contact->office_email,
                        "website_one" => $contact->website1,
                        "website_two" => $contact->website2,
                        "website_three" => $contact->website3
                    ],
                    "home_address" => [
                        "street_one" => $contact->home_street1,
                        "street_two" => $contact->home_street2,
                        "postal_code" => $contact->home_postal_code,
                        "city" => $contact->home_city,
                        "state" => $contact->home_state,
                        "country" => $contact->home_country
                    ],
                    "work_address" => [
                        "street_one" => $contact->work_street1,
                        "street_two" => $contact->work_street2,
                        "postal_code" => $contact->work_postal_code,
                        "city" => $contact->work_city,
                        "state" => $contact->work_state,
                        "country" => $contact->work_country
                    ],
                ];

                $color_app = [
                    "background_color" => $contact->background_color,
                    "text_color" => $contact->text_color,
                    "text_highlight_color" => $contact->text_highlight_color
                ];

                $link_img = "storage/link_tree_images/" . $linktree->link_image;

                $linktree_array = [
                    "user_id"  => $linktree->user_id,
                    "link_image" => $link_img,
                    "link_data" => json_decode($linktree->link_one),
                ];

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "request" => "get_cns",
                    "contact" => $contact_array,
                    "color_app" => $color_app,
                    "linktree" => $linktree_array
                ];

                return $messages;
            } else if($request_name === "get_events"){
                $user_check = User::where('id', $user_id)->first();
                if ($user_check !== null) {
                    $events = Event::where('user_id', $user_id)->get();
                    $event_active = Event::where('is_displayed', 1)->where('user_id', $user_id)->get();
                    $event_array = $e_active_array = [];
                    foreach($events as $event){
                        $data = [
                            "id" => $event->id,
                            "is_displayed" => $event->is_displayed,
                            "title" => $event->title,
                            "description" => $event->description,
                            "image" => "storage/event_images/". $event->image,
                            "start_time" => date('h:i A', strtotime($event->start_time)),
                            "end_time" => date('h:i A', strtotime($event->end_time)),
                            "start_date" => date("F-d-Y", strtotime($event->start_date)),
                            "end_date" => date("F-d-Y", strtotime($event->end_date)),
                            "location" => str_replace(',', ' , ', $event->location),
                        ];

                        array_push($event_array, $data);
                    }
                    

                    foreach($event_active as $e_active){
                        $start = preg_split('/ +/', $e_active->start_date);
                        $start_timeplusdate = $start[0] . ' ' . $e_active->start_time;
                        $end = preg_split('/ +/', $e_active->end_date);
                        $end_timeplusdate = $end[0] . ' ' . $e_active->end_time;

                        $data_active = [
                            "id" => $e_active->id,
                            "is_displayed" => $e_active->is_displayed,
                            "title" => $e_active->title,
                            "description" => $e_active->description,
                            "image" => "storage/event_images/". $e_active->image,
                            "start_time" => date('h:i A', strtotime($e_active->start_time)),
                            "end_time" => date('h:i A', strtotime($e_active->end_time)),
                            "start_date" => date("F-d-Y", strtotime($e_active->start_date)),
                            "end_date" => date("F-d-Y", strtotime($e_active->end_date)),
                            "location" => str_replace(',', ' , ', $event->location),
                            "utc_start" => date("Ymd\THi",strtotime($start_timeplusdate)),
                            "utc_end" => date("Ymd\THi",strtotime($end_timeplusdate))
                        ];

                        array_push($e_active_array, $data_active);
                    }

                    $messages = [
                        "status" => "200",
                        "message" => "success",
                        "data" => $event_array,
                        "request" => "get_events",
                        "event_active" => $e_active_array
                    ];

                    return $messages;
                } else {
                    $messages = [
                        "status" => "412",
                        "message" => "User does not exist",
                        "request" => "get_events",
                    ];

                    return $messages;
                }
            }
        }
    }

    public static function countView($device = 'website')
    {
        $env = 1;
        if (config("app.env") == 'local') {
            $env = 0;
        }
        if ($env == 0) {
            $page = str_replace('https://vvip9.co', '', Request::url());
        } else {
            $page = str_replace('https://vvip9.co','', Request::url());
        }
        if (empty($page)) {
            $page = '/index';
        }
        $page_array = explode('/', $page);

        $viewcount = ViewCount::where('page_name', $page_array[1])->first();
        if ($viewcount) {
            if ($device == 'mobile') {
                $viewcount->mobile = ++$viewcount->mobile;
            } else {
                $viewcount->website = ++$viewcount->website;
            }
            $viewcount->save();
        }
    }

    public static function user_activity($page, $type, $tbl, $row) {
        Action::create([
            'name' => $page,
            'type' => $type,
            'table_name' => $tbl,
            'row_id' => $row
        ]);
    }

    public static function user_stats() {
        $user_stat = new UserStat();
        $user_stat->user_id = (Auth::user()) ? Auth::id() : NULL;
        $user_stat->user_ip = Request::getClientIp();
        $user_stat->user_os = self::get_os();
        $user_stat->user_browser = self::get_browsers();
        $user_stat->user_agent = Request::header('User-Agent');
        $user_stat->social_media = Request::server('HTTP_REFERER');
        $user_stat->device_ip = null;
        $user_stat->device_id = null;
        $user_stat->device_name = self::get_device();
        $user_stat->nfc_support = null;
        $user_stat->used_at = Carbon::now()->format('Y-m-d H:i:s');
        $user_stat->save();
    }

    public static function get_user_agent(){
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public static function get_ip(){

        $ipaddress = '';
       if (isset($_SERVER['HTTP_CLIENT_IP']))
           $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
       else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
           $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
       else if(isset($_SERVER['HTTP_X_FORWARDED']))
           $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
       else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
           $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
       else if(isset($_SERVER['HTTP_FORWARDED']))
           $ipaddress = $_SERVER['HTTP_FORWARDED'];
       else if(isset($_SERVER['REMOTE_ADDR']))
           $ipaddress = $_SERVER['REMOTE_ADDR'];
       else
           $ipaddress = 'UNKNOWN';
       return $ipaddress;

    }

    public static function get_os(){

        $user_agent = self::get_user_agent();
        $os_platform = "Unknown OS Platform";
        $os_array = array(
            '/windows nt 10/i'  => 'Windows 10',
            '/windows nt 6.3/i'  => 'Windows 8.1',
            '/windows nt 6.2/i'  => 'Windows 8',
            '/windows nt 6.1/i'  => 'Windows 7',
            '/windows nt 6.0/i'  => 'Windows Vista',
            '/windows nt 5.2/i'  => 'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'  => 'Windows XP',
            '/windows xp/i'  => 'Windows XP',
            '/windows nt 5.0/i'  => 'Windows 2000',
            '/windows me/i'  => 'Windows ME',
            '/win98/i'  => 'Windows 98',
            '/win95/i'  => 'Windows 95',
            '/win16/i'  => 'Windows 3.11',
            '/macintosh|mac os x/i' => 'Mac OS X',
            '/mac_powerpc/i'  => 'Mac OS 9',
            '/linux/i'  => 'Linux',
            '/ubuntu/i'  => 'Ubuntu',
            '/iphone/i'  => 'iPhone',
            '/ipod/i'  => 'iPod',
            '/ipad/i'  => 'iPad',
            '/android/i'  => 'Android',
            '/blackberry/i'  => 'BlackBerry',
            '/webos/i'  => 'Mobile',
        );

        foreach ($os_array as $regex => $value){
            if(preg_match($regex, $user_agent)){
                $os_platform = $value;
            }
        }
        return $os_platform;
    }

    public static function get_browsers(){

        $user_agent= self::get_user_agent();

        $browser = "Unknown Browser";

        $browser_array = array(
            '/msie/i'  => 'Internet Explorer',
            '/Trident/i'  => 'Internet Explorer',
            '/firefox/i'  => 'Firefox',
            '/safari/i'  => 'Safari',
            '/chrome/i'  => 'Chrome',
            '/edge/i'  => 'Edge',
            '/opera/i'  => 'Opera',
            '/netscape/'  => 'Netscape',
            '/maxthon/i'  => 'Maxthon',
            '/knoqueror/i'  => 'Konqueror',
            '/ubrowser/i'  => 'UC Browser',
            '/mobile/i'  => 'Safari Browser',
        );

        foreach($browser_array as $regex => $value){
            if(preg_match($regex, $user_agent)){
                $browser = $value;
            }
        }
        return $browser;
    }

    public static function get_device(){

        $tablet_browser = 0;
        $mobile_browser = 0;

        if(preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))){
            $tablet_browser++;
        }

        if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))){
            $mobile_browser++;
        }

        if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),
        'application/vnd.wap.xhtml+xml')> 0) or
            ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or
                isset($_SERVER['HTTP_PROFILE'])))){
                    $mobile_browser++;
        }

        $mobile_ua = strtolower(substr(self::get_user_agent(), 0, 4));
        $mobile_agents = array(
            'w3c','acs-','alav','alca','amoi','audi','avan','benq','bird','blac','blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
            'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-','maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',

            'newt','noki','palm','pana','pant','phil','play','port','prox','qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',

            'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-','tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
            'wapr','webc','winw','winw','xda','xda-');

        if(in_array($mobile_ua,$mobile_agents)){
            $mobile_browser++;
        }

        if(strpos(strtolower(self::get_user_agent()),'opera mini') > 0){
            $mobile_browser++;

            //Check for tables on opera mini alternative headers

            $stock_ua =
            strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?
            $_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:
            (isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?
            $_SERVER['HTTP_DEVICE_STOCK_UA']:''));

            if(preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)){
                $tablet_browser++;
            }
        }

        if($tablet_browser > 0){
            //do something for tablet devices

            return 'Tablet';
        }
        else if($mobile_browser > 0){
            //do something for mobile devices

            return 'Mobile';
        }
        else{
            //do something for everything else
                return 'Computer';
        }

    }

    public static function unicodeMessageEncode($message){
        return '@U' . strtoupper(bin2hex(mb_convert_encoding($message, 'UCS-2','auto')));
    }
}
