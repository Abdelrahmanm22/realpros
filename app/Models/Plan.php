<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'title',
        'service1',
        'service2',
        'service3',
        'service4',
        'service5',
        'service6',
        'price',
        'priceDesc',
        'clicks',
        'user_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Model\User','user_id');
    }
}
