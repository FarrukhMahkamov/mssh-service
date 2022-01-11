<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'region_id',
    ];

    public function region() {
        return $this->belongsTo(Region::class);
    }

}
