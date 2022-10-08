<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Page;

class FrontController extends Controller
{
    public function index(){
        $pages = Page::all();
        $destinations = Destination::all();
        return view('frontend.index',compact('destinations','pages'));
    }
    public function destination(Destination $destination){
        return view('frontend.destination',compact('destination'));
    }
    public function page(Page $page){
        return view('frontend.page',compact('page'));
    }
}
