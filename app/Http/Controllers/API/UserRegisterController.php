<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{

    public function registerUser(Request $request){
        $register_data = $request->input('register');
        if(!empty($register_data)){
            foreach($register_data as $data){
            $user_exist_phone = User::where('phone_number', '=', $data['phone_number'])->first();
                if($user_exist_phone === null){
                    $user = new User;
                    $user->name = $data['name'];
                    $user->phone_number = $data['country_number'] . $data['phone_number'];
                    $user->email = $data['email'];
                    $user->package = $data['package_name'];
                    $user->package_status = "active";
                    $user->package_start_date = Carbon::now();
                    $user->package_end_date = Carbon::now()->addYear(1);
                    $remain = $user->package_end_date->diffIndays($user->package_start_date);
                    $user->remaining_days = $remain;
                    $user->url = $data['url'];
                    $user->secure_status = $data['secure_status'];
                    $user->save();
                    
                    $messages = [
                        "status" => '200 OK',
                        "message" => 'Success',
                        "user_id" => $user->id
                    ];
                    return $messages;
                }  else {
                    $messages = [
                        "status" => '500 Internal',
                        "message" => 'Data Exist',
                    ];
                    return $messages;
                }
            }     
        } else {

            $messages = [
                "status" => '404',
                "message" => 'Something went wrong'
            ];
            return $messages;
        }
    }

    public function createPin(Request $request,$user_id = null){
        $create_pin = $request->input('pin');
        if(!empty($create_pin)){
                // $user_id = $pin['user_id'];
                $has_user = User::find($user_id);
                if(!empty($has_user)){
                    $has_user->password = Hash::make($create_pin);
                    $has_user->save();  

                    $messages = [
                        "status" => '200 OK',
                        "message" => 'Success'
                    ];
                    
                    return $messages;
            }
        } else {
            $messages = [
                "status" => '404',
                "message" => 'Something went wrong'
            ];
            return $messages;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    // }
    
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
