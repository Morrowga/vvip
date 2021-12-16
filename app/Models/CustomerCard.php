<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCard extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'pdf_file', 'transparent_front', 'transparent_back', 'preview_image', 'text_color', 'bg_color', 'card_logo', 'description', 'name', 'position', 'finish_card', 'user_recieve', 'package_name'];

    protected $table = "customer_cards";
}
