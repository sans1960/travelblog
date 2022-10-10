<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Page;
use App\Models\Sight;

class FrontController extends Controller
{
    public function index(){
        $pages = Page::all();
        $destinations = Destination::all();
        return view('frontend.index',compact('destinations','pages'));
    }
    public function destination(Destination $destination){
        $sights = Sight::all();
        return view('frontend.destination',compact('destination','sights'));
    }
    public function page(Page $page){
        return view('frontend.page',compact('page'));
    }
    public function sight(Sight $sight){
        return view('frontend.sight',compact('sight'));
    }
}
