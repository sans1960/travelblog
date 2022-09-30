<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','destination_id','image','subregion_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function destination(){
        return $this->belongsTo(Destination::class);
    }
  
    public function subregion(){
        return $this->belongsTo(Subregion::class);
    }
}
