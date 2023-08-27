<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class popupcontact extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'full_name',
        'email',
        'phone',
        'c_market',
        'h_about',
    ];
}
