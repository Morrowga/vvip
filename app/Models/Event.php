<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $fillable = ['date', 'title', 'description', 'image', 'location'];

    protected $table = 'events';
}
