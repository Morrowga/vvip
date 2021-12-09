<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UservisitorCheck extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ip', 'time', 'country_name', 'region_name', 'city_name', 'device_image', 'device_name', 'platform', 'browser', 'verify_visitor', 'total_visitor_count'];

    protected $table = 'uservisitor_checks';
}
