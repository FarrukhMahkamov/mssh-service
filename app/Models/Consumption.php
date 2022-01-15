<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'consumption_category_id'
    ];

    public function ConsumptionCategory() {
        return $this->belongsTo(ConsumptionCategory::class);
    }
}
