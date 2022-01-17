<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'brand_id',
        'size_id',
        'block_count',
        'image',
        'first_price',
        'second_price',
    ];

    public function size() {
        return $this->belongsTo(Size::class);
    }

    public function brand() {
       return $this->belongsTo(Brand::class);
    }

}
