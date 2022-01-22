<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryLeftover extends Model
{
    use HasFactory;

    protected $fillable=[
      'data',
      'document',
      'type',
      'user_id',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
