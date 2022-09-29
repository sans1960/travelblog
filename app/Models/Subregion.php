<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subregion extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','destination_id'];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function destination(){
        return $this->belongsTo(Destination::class);
    }
}
