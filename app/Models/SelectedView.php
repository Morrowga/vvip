<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedView extends Model
{
    use HasFactory;

    protected $fillable = ['request_name', 'user_id'];

    protected $table = "selected_views";
}
