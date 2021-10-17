<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitingTime extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'time_left'];

    protected $table = "waiting_times";
}
