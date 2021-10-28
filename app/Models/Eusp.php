<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eusp extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'url', 'sms', 'phone', 'user_id'];

    protected $table = "eusps";
}
