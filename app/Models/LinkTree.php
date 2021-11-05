<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkTree extends Model
{
    use HasFactory;

    protected $fillable = ['link_image', 'link_one', 'link_two', 'link_three', 'link_four', 'link_five'];

    protected $table = "link_trees";
}
