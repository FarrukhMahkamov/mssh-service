<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'username',
        'username_slug',
        'user_phone_number',
        'boss_name',
        'boss_name_slug',
        'boss_phone_number',
    ];
    use HasFactory;

    public function brand() {
        return $this->hasMany(Brand::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
