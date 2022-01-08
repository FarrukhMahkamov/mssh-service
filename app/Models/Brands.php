<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'delivery_id',
        'image',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function delivery() {
        return $this->belongsTo(Delivery::class);
    }
}
