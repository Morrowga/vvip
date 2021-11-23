<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStat extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','user_ip','user_os','user_browser','user_agent','social_media',
    'user_id','device_ip','device_id','device_name','nfc_support','used_at'];
}
