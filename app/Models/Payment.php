<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['phone','status','ip_address','payment_amount', 'payment_type','user_id','screenshot_image','is_valid'];

    protected $table = 'payments';
}
