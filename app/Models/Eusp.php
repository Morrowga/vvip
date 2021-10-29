<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eusp extends Model
{
    use HasFactory;

    protected $fillable = ['email_address','email_subject','email_body','url', 'sms_no','sms_text', 'phone', 'user_id'];

    protected $table = "eusps";
}
