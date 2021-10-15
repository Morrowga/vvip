<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SmartCardDesign extends Model
{
    use HasFactory;

    protected $fillable = ['front_image', 'back_image'];

    protected $table = "smart_card_designs";

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
