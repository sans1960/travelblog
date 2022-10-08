<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sight extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','extract','body','date','destination_id','subregion_id','country_id','category_id','image','caption','latitud','longitud','zoom'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function destination(){
        return $this->belongsTo(Destination::class);
    }
    public function subregion(){
        return $this->belongsTo(Subregion::class);
    }
}
