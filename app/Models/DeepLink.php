<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeepLink extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'active', 'user_id', 'icon'];

    protected $table = "deep_links";
}