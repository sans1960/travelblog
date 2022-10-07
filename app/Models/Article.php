<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','order','image','body','page_id','caption'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function page(){
        return $this->belongsTo(Page::class);
    }
}
