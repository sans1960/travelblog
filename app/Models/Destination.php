<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','title','subtitle','body','sidebody','image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function imagedestination(){
        return $this->hasMany(ImageDestination::class);
    }
    public function subregion(){
        return $this->hasMany(Subregion::class);
    }
    public function country(){
        return $this->hasMany(Country::class);
    }
    public function sight(){
        return $this->hasMany(Sight::class);
    }
}
