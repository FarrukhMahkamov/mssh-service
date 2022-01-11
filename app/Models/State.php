<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function region() {
        return $this->hasMany(Region::class);
    }

    public function user() {
        return $this->hasMany(User::class);
    }

}
