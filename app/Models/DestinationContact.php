<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationContact extends Model
{
    use HasFactory;
    protected $guarded = [];
   

    protected $casts = [
        'countries' => 'array'
    ];
}
