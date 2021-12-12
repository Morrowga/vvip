<?php

namespace App\Http\Controllers\API;

use Auth;
use App\Models\Eusp;
use App\Models\User;
use App\Models\Action;
use App\Helpers\Helper;
use App\Models\Contact;
use App\Models\Package;
use App\Models\DeepLink;
use App\Models\HomeInfo;
use App\Models\LinkTree;
use Jenssegers\Agent\Agent;
use App\Models\SelectedView;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\UservisitorCheck;
use App\Events\VisitorNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

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
            // $background_color = $request->background_color;
            // $text_color = $request->text_color;
            // $text_highlight_color = $request->text_highlight_color;
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
                // $exist->background_color  = $background_color;
                // $exist->text_color = $text_color;
                // $exist->text_highlight_color = $text_highlight_color;
                if($request->hasfile('image')){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('contact_images', $imageName, 'public');
                    $exist->image = $imageName;
                } 
                $exist->save();
    
                // Helper::user_stats('contact', 'create', 'contacts', $exist->id);

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
                // $contact->background_color  = $background_color;
                // $contact->text_color = $text_color;
                // $contact->text_highlight_color = $text_highlight_color;
                if($image){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('contact_images', $imageName, 'public');
                    $contact->image = $imageName;
                } 
                $contact->save();

                // Helper::user_stats('contact', 'create', 'contacts', $contact->id);

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
                if($active === "1"){

                    $deep_link_where_active = DeepLink::where('user_id', $user_id)->where('active', '=', $active)->first();
                    if($deep_link_where_active !== null){
                        $deep_link_where_active->active = 0;
                        $deep_link_where_active->save();

                        // Helper::user_stats('deep_link', 'update', 'deep_links', $deep_link_where_active->id);

                        $deep_link_update_active = DeepLink::where('user_id', $user_id)->where('name', '=', $name)->first();
                        $deep_link_update_active->url = $url;
                        $deep_link_update_active->active = $active;
                        $deep_link_update_active->save();

                        // Helper::user_stats('deep_link', 'update', 'deep_links', $deep_link_update_active->id);

                        $deep_latest = DeepLink::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();
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
                        $deep_link_update_active = DeepLink::where('user_id', $user_id)->where('name', '=', $name)->first();
                        $deep_link_update_active->url = $url;
                        $deep_link_update_active->active = $active;
                        $deep_link_update_active->save();

                        // Helper::user_stats('deep_link', 'update', 'deep_links', $deep_link_update_active->id);

                        $deep_latest = DeepLink::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();
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
                } else {
                    $deep_link_active = DeepLink::where('name', '=', $name)->where('user_id', '=', $user_id)->first();
                    $deep_link_active->url = $url;
                    $deep_link_active->save();

                    // Helper::user_stats('deep_link', 'update', 'deep_links', $deep_link_active->id);

                    $deep_latest = DeepLink::where('user_id', $user_id)->orderBy('updated_at', 'DESC')->get();
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
            } else {
                $messages = [
                    "status" => "500",
                    "message" => "User_id does not exist or wrong",
                ];
                return $messages;
            }
        }
    }


    public function displayUserWant(Request $request,$url){
            $normal = User::where('url', $url)->first();
            $encrypt = User::where('encryption_url', $url)->first();

            if($encrypt !== null){
                return "encrypt";
                $data_module = SelectedView::where('user_id', $encrypt->id)->first();
                if(empty($data_module->request_name)){
                    $messages = [
                        "message" => 'Any Action is not Active'
                    ];
                    return view('vvip_customers.select_view', compact('data_module', 'messages'));
                } else {
                    return view('vvip_customers.select_view', compact('data_module'));
                }
            } else if($normal !== null){
                return "normal";
                if ($normal->secure_status !== 'private') {
                    $data_module = SelectedView::where('user_id', $encrypt->id)->first();
                    if(empty($data_module->request_name)){
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
            } else {
                return abort(404);
            } 
    }

    


    public function changeAction(Request $request){
            $userid = $request->user_id;
            $user_exist = User::where('id', '=', $userid)->first();
            if($user_exist !== null){
                $request_name = $request->request_name;
                $self_request = $request->self_request_name;
                $checkexist = SelectedView::where('user_id', '=',$userid)->first();
                if($checkexist === null){
                        $new_active = new SelectedView();
                        $new_active->user_id = $userid;
                        $new_active->request_name = $request_name;
                        $new_active->self_request;
                        $new_active->save();
            
                        // Helper::user_stats('change_action', 'create', 'selected_views', $new_active->id);
                        
                        $messages = [
                            "status" => "200",
                            "message" => "success new",
                            "data" => $new_active,
                        ];
                        return $messages;
                   
                } else {
                    $checkexist->request_name = $request_name;
                    $checkexist->self_request_name = $self_request;
                    $checkexist->save();
        
                    // Helper::user_stats('change_action', 'update', 'selected_views', $checkexist->id);

                    $messages = [
                            "status" => "200",
                            "message" => "success update",
                            "data" => $checkexist,
                        ];
                    return $messages;
                }
            } else {
                $messages = [
                    "status" => "400",
                    "message" => "user does not exist"
                ];
                return $messages;
            }
    }

    public function getChangeAction(Request $request){
       $get_action = Action::get();
       $array = [];
       foreach($get_action as $action){
           $data = [
                "id" => $action->id,
                "name" => $action->name,
                "action_image" => $action->action_image,
                "request_name" => $action->request_name,
                "self_request_name" => $action->self_request_name
           ];
           array_push($array, $data);
       }

       $messages = [
            "status" => "200",
            "message" => "success",
            "data" => $array
       ];

       return $messages;
    }

    public function create_url(Request $request){
        if($request){
            $userid = $request->user_id;
            $url = $request->url;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_url = new Eusp();
                $create_url->user_id = $userid;
                $create_url->url = $url;
                $create_url->save();

                // Helper::user_stats('creat_url', 'create', 'eusps', $create_url->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "url" => $create_url->url
                ];
                return $messages;
            } else {
                $check->url = $url;
                $check->save();

                // Helper::user_stats('creat_url', 'update', 'eusps', $check->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "url" => $check->url
                ];
                return $messages;
            }
        }
    }

    public function create_sms(Request $request){
        if($request){
            $userid = $request->user_id;
            $sms_no = $request->sms_no;
            $sms_text = $request->sms_text;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_sms = new Eusp();
                $create_sms->user_id = $userid;
                $create_sms->sms_no = $sms_no;
                $create_sms->sms_text = $sms_text;
                $create_sms->save();

                // Helper::user_stats('create_sms', 'create', 'eusps', $create_sms->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "sms_no" => $create_sms->sms_no,
                    "sms_text" => $create_sms->sms_text
                ];
                return $messages;
            } else {
                $check->sms_no = $sms_no;
                $check->sms_text = $sms_text;
                $check->save();

                // Helper::user_stats('create_sms', 'update', 'eusps', $check->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "sms_no" => $check->sms_no,
                    "sms_text" => $check->sms_text
                ];
                return $messages;
            }
        }
    }

    public function create_email(Request $request){
        if($request){
            $userid = $request->user_id;
            $email_address = $request->email_address;
            $email_subject = $request->email_subject;
            $email_body = $request->email_body;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_email = new Eusp();
                $create_email->user_id = $userid;
                $create_email->email_address = $email_address;
                $create_email->email_subject = $email_subject;
                $create_email->email_body = $email_body;
                $create_email->save();

                // Helper::user_stats('create_email', 'create', 'eusps', $create_email->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "email_address" => $create_email->email_address,
                    "email_subject" => $create_email->email_subject,
                    "email_body" => $create_email->email_body,
                ];
                return $messages;
            } else {
                $check->email_address = $email_address;
                $check->email_subject = $email_subject;
                $check->email_body = $email_body;
                $check->save();

                // Helper::user_stats('create_email', 'update', 'eusps', $check->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "email_address" => $check->email_address,
                    "email_subject" => $check->email_subject,
                    "email_body" => $check->email_body,
                ];
                return $messages;
            }
        }
    }

    public function create_phone(Request $request){
        if($request){
            $userid = $request->user_id;
            $phone = $request->phone;
            $check = Eusp::where('user_id', $userid)->first();
            if($check === null){
                $create_phone = new Eusp();
                $create_phone->user_id = $userid;
                $create_phone->phone = $phone;
                $create_phone->save();

                // Helper::user_stats('create_phone', 'create', 'eusps', $create_phone->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "data" => $create_phone->phone
                ];
                return $messages;
            } else {
                $check->phone = $phone;
                $check->save();

                // Helper::user_stats('create_phone', 'update', 'eusps', $check->id);

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "phone" => $check->phone
                ];
                return $messages;
            }
        }
    }

    public function create_appearance(Request $request){
        $user_id = $request->user_id;
        $background_color = $request->background_color;
        $text_color = $request->text_color;
        $text_highlight_color = $request->text_highlight_color;

        $check_user = User::where('id', $user_id)->first();

        if($check_user !== null){
            $contact_exist = Contact::where('user_id', $check_user->id)->first();
            $link_tree_exist = LinkTree::where('user_id', $check_user->id)->first();
            if($contact_exist !== null){
                $contact_exist->background_color = $background_color;
                $contact_exist->text_color = $text_color;
                $contact_exist->text_highlight_color = $text_highlight_color;
                $contact_exist->save();

                // Helper::user_stats('create_appearance', 'update', 'contacts', $contact_exist->id);
            } else {
                $contact_new = new Contact();
                $contact_new->user_id = $user_id;
                $contact_new->background_color = $background_color;
                $contact_new->text_color = $text_color;
                $contact_new->text_highlight_color = $text_highlight_color;
                $contact_new->save();

                // Helper::user_stats('create_appearance', 'create', 'contacts', $contact_new->id);
            }

            if($link_tree_exist !== null){
                $link_tree_exist->background_color = $background_color;
                $link_tree_exist->text_color = $text_color;
                $link_tree_exist->text_highlight_color = $text_highlight_color;
                $link_tree_exist->save();

                // Helper::user_stats('create_appearance', 'update', 'link_trees', $link_tree_exist->id);
            } else {
                $link_new = new LinkTree();
                $link_new->user_id = $user_id;
                $link_new->background_color = $background_color;
                $link_new->text_color = $text_color;
                $link_new->text_highlight_color = $text_highlight_color;
                $link_new->save();

                // Helper::user_stats('create_appearance', 'create', 'link_trees', $link_new->id);
                $contact_exist = Contact::where('user_id', $check_user->id)->first();
                $link_tree_exist = LinkTree::where('user_id', $check_user->id)->first();
                if($contact_exist !== null){
                    $contact_exist->background_color = $background_color;
                    $contact_exist->text_color = $text_color;
                    $contact_exist->text_highlight_color = $text_highlight_color;
                    $contact_exist->save();
                } else {
                    $contact_new = new Contact();
                    $contact_new->user_id = $user_id;
                    $contact_new->background_color = $background_color;
                    $contact_new->text_color = $text_color;
                    $contact_new->text_highlight_color = $text_highlight_color;
                    $contact_new->save();
                }
    
                if($link_tree_exist !== null){
                    $link_tree_exist->background_color = $background_color;
                    $link_tree_exist->text_color = $text_color;
                    $link_tree_exist->text_highlight_color = $text_highlight_color;
                    $link_tree_exist->save();
                } else {
                    $link_new = new LinkTree();
                    $link_new->user_id = $user_id;
                    $link_new->background_color = $background_color;
                    $link_new->text_color = $text_color;
                    $link_new->text_highlight_color = $text_highlight_color;
                    $link_new->save();
                }
            }

            $messages = [
                "status" => "200",
                "message" => "success",
            ];

            return $messages;
        } else {
             $messages = [
                "status" => "412",
                "message" => "User does not exist."
             ];

             return $messages;
        }
    }


    public function create_link_tree(Request $request){
        $links = $request->links;
        $links_label = $request->links_label;
            $data = ['label' => $links_label, 'url' => $links];
            $result = [];
            foreach ($data['label'] as $index => $d) {
                $result[] = [
                        'label' => $d,
                        'url' => $data['url'][$index]
                    ];
            }
        
        $user_id = $request->user_id;
        $image = $request->file('link_image');
        $check_user = User::where('id', $user_id)->first();
        if($check_user !== null){
       
            $link_exist = LinkTree::where('user_id', $check_user->id)->first();

            if($link_exist !== null){
                $link_exist->link_one = json_encode($result);
                if($request->hasfile('link_image')){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('link_tree_images', $imageName, 'public');
                    $link_exist->link_image = $imageName;
                } 
                $link_exist->save();

                // Helper::user_stats('create_link_tree', 'update', 'link_trees', $link_exist->id);

                $final_data = [
                  "user_id"  => $link_exist->user_id,
                  "link_image" => $link_exist->link_image,
                  "link_data" => json_decode($link_exist->link_one),
                ];

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "data" => $final_data
                 ];
    
                 return $messages;
            } else {
                $new_link = new LinkTree();
                $new_link->link_one = json_encode($result);
                $new_link->user_id = $user_id;
                if($request->hasfile('link_image')){
                    $imageName = $image->getClientOriginalName();
                    $file_save = $image->storeAs('link_tree_images', $imageName, 'public');
                    $new_link->link_image = $imageName;
                } else {
                    $new_link->link_image = 'logo.jpeg';
                }
                $new_link->save();

                // Helper::user_stats('create_link_tree', 'create', 'link_trees', $new_link->id);

                $final_data = [
                    "user_id"  => $new_link->user_id,
                    "link_image" => $new_link->link_image,
                    "link_data" => json_decode($new_link->link_one),
                  ];

                $messages = [
                    "status" => "200",
                    "message" => "success",
                    "data" => $final_data
                 ];
    
                 return $messages;
            }
        } else {
            $messages = [
                "status" => "412",
                "message" => "User does not exist."
             ];

             return $messages;
        }
    }

    public function privateConnection($user_id = null){
        return view('vvip_customers.private_connection');
    }
}


// $ip = "103.135.217.174";
                    // //$request->visitor()->ip()
                    // $agent = new Agent;
                    // $mobile = $agent->isMobile();
                    // $desktop = $agent->isDesktop();
                    // $tablet = $agent->isTablet();
                    // $phone = $agent->isPhone();
                    // if($mobile){
                    //     $image = 'fa-mobile';
                    //     $result = 'Mobile';
                    // } else if($desktop) {
                    //     $image = 'fa-desktop';
                    //     $result = 'Desktop';
                    // } else if($tablet){
                    //     $image = 'fa-tablet';
                    //     $result = 'Tablet';
                    // } else {
                    //     $image = 'fa-question';
                    //     $result = 'Unknown Device';
                    // }
                    // $platform = $request->visitor()->platform();
                    // $browser  = $request->visitor()->browser();
                    // $client = new \GuzzleHttp\Client();
                    // $request = $client->get('https://api.freegeoip.app/json/'. $ip . '?apikey=bceff300-5899-11ec-a974-61401516c2e1');
                    // $d = $request->getBody();
                    // $data = json_decode($d);
                    // $country =  $data->country_name;
                    // $region = $data->region_name;
                    // $city = $data->city;
                    // $timezone = Carbon::now();
                    // $time_format = $timezone->toDateTimeString();
                    // $store_stat = new UservisitorCheck();
                    // $store_stat->user_id = $user->id;
                    // $store_stat->ip = $ip;
                    // $store_stat->device_image = $image;
                    // $store_stat->device_name = $result;
                    // $store_stat->platform = $platform;
                    // $store_stat->browser = $browser;
                    // $store_stat->country_name = $country;
                    // $store_stat->region_name = $region;
                    // $store_stat->city_name = $city;
                    // $store_stat->time = $time_format;
                    // $store_stat->save();

                    // $pusher = new Pusher(
                    //     config('broadcasting.connections.pusher.key'),
                    //     config('broadcasting.connections.pusher.secret'),
                    //     config('broadcasting.connections.pusher.app_id'),
                    //     config('broadcasting.connections.pusher.options')
                    // );

                    // $data = ['text' => 'Visitor enter your private page.'];

                    // $pusher->trigger( 'notification', 'visitor-notification', $data);
                    
                    // return view('vvip_customers.private_connection', compact('user'));


// public function getUserVisitor($userid = null){
    //     if($userid !== null){
    //         $visitor_check = UservisitorCheck::where('user_id', $userid)->where('verify_visitor', 0)->latest('time')->get();
    //         $total_count = $visitor_check->count();
    //         if($total_count > 0){
    //             $visitor_array = [];
    //             foreach($visitor_check as $visitor){
    //                 $data = [
    //                     'id' => $visitor['id'],
    //                     'user_id' => $visitor['user_id'],
    //                     'ip' => $visitor['ip'],
    //                     'device_image' => $visitor['device_image'],
    //                     'device_name' => $visitor['device_name'],
    //                     'platform' => $visitor['platform'],
    //                     'browser' => $visitor['browser'],
    //                     'country' => $visitor['country_name'],
    //                     'region' => $visitor['region_name'],
    //                     'city' => $visitor['city_name'],
    //                     'time' => $visitor['time'],    
    //                     'verify_status' => $visitor['verify_visitor']
    //                 ];
    //                 array_push($visitor_array, $data);
    //             }
    
    //             $messages = [
    //                 "status" => "200",
    //                 "message" => "success",
    //                 "data" => $visitor_array,
    //                 "total_count" => $total_count
    //             ];  
    
    //             return $messages;
    //         } else {
    //             $messages = [
    //                 "status" => "412",
    //                 "message" => "No Data Available.",
    //             ];  
    
    //             return $messages;
    //         }
            
    //     } else {
    //         $messages = [
    //             "status" => "400",
    //             "message" => "userid is essential",
    //         ];  

    //         return $messages;
    //     }
    // }

    // public function lastestVisitor($userid = null){
    //     if($userid !== null){
    //         $all = UservisitorCheck::where('user_id', $userid)->where('verify_visitor', 0)->count();
    //         $lastest = UservisitorCheck::where('user_id', $userid)->latest('time')->first();
    //         $data = [
    //             'id' => $lastest['id'],
    //             'user_id' => $lastest['user_id'],
    //             'ip' => $lastest['ip'],
    //             'device_image' => $lastest['device_image'],
    //             'device_name' => $lastest['device_name'],
    //             'platform' => $lastest['platform'],
    //             'browser' => $lastest['browser'],
    //             'country' => $lastest['country_name'],
    //             'region' => $lastest['region_name'],
    //             'city' => $lastest['city_name'],
    //             'time' => $lastest['time'],
    //             'verify_visitor' => $lastest['verify_visitor']
    //         ];
    //         $messages = [
    //             "status" => "200",
    //             "message" => "success",
    //             "data" => $data,
    //             "total_count" => $all
    //         ];  

    //         return $messages;
    //     }
    // }


    // public function verify_visitor(Request $request){
    //     $check_verify = $request->status;
    //     $visitor_id = $request->visitor_id;
    //     $userid = $request->user_id;
    //     if($check_verify == 1){
    //         if($visitor_id !== null){
    //             $allow_visitor = UservisitorCheck::where('user_id', $userid)
    //             ->where('id', $visitor_id)
    //             ->first();

    //             $count = UservisitorCheck::where('user_id', $allow_visitor->user_id)
    //             ->where('browser', $allow_visitor->browser)
    //             ->where('ip', $allow_visitor->ip)
    //             ->where('device_name', $allow_visitor->device_name)
    //             ->where('platform', $allow_visitor->platform)
    //             ->where('verify_visitor', '0')
    //             ->count();
                
    //             $allow_visitor_devices = UservisitorCheck::where('user_id', $allow_visitor->user_id)
    //             ->where('browser', $allow_visitor->browser)
    //             ->where('ip', $allow_visitor->ip)
    //             ->where('device_name', $allow_visitor->device_name)
    //             ->where('platform', $allow_visitor->platform)
    //             ->where('verify_visitor', '0')
    //             ->get();

    //             foreach($allow_visitor_devices as $allow_device){
    //                 $allow_device->verify_visitor = $check_verify;
    //                 $allow_device->save();
    //             }

    //             $pusher = new Pusher(
    //                 config('broadcasting.connections.pusher.key'),
    //                 config('broadcasting.connections.pusher.secret'),
    //                 config('broadcasting.connections.pusher.app_id'),
    //                 config('broadcasting.connections.pusher.options')
    //             );

    //             $data = ['text' => 'Now this visitor is verified.'];

    //             $pusher->trigger( 'verify', 'verified-visitor', $data);
                
               
    //             $messages = [
    //                 'status' => "200",
    //                 'message' => "success",
    //                 'count' => $count
    //             ];

    //             return $messages;
    //         }  else {
    //             $messages = [
    //                 'status' => "400",
    //                 'message' => "required field is wrong",
    //             ];

    //             return $messages;
    //         }
    //     } else {
    //         $disallow = UservisitorCheck::where('user_id', $userid)
    //         ->where('id', $visitor_id)
    //         ->first();


    //         $count = UservisitorCheck::where('user_id', $disallow->user_id)
    //         ->where('browser', $disallow->browser)
    //         ->where('ip', $disallow->ip)
    //         ->where('device_name', $disallow->device_name)
    //         ->where('platform', $disallow->platform)
    //         ->where('verify_visitor', '0')
    //         ->count();

    //         $remove_visitor = UservisitorCheck::where('user_id', $disallow->user_id)
    //         ->where('browser', $disallow->browser)
    //         ->where('ip', $disallow->ip)
    //         ->where('device_name', $disallow->device_name)
    //         ->where('platform', $disallow->platform)
    //         ->where('verify_visitor', '0')
    //         ->delete();

            
    //         $messages = [
    //             'status' => "200",
    //             'message' => "success",
    //             'count' => $count
    //         ];

    //         return $messages;
    //     }
    // }