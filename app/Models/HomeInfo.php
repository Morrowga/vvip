<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInfo extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'image'];

    protected $table = "home_infos";
}
