<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Page;
use App\Models\Sight;
use App\Models\Country;

class FrontController extends Controller
{
    public function index(){
        $pages = Page::all();
        $destinations = Destination::all();
        return view('frontend.index',compact('destinations','pages'));
    }
    public function destination(Destination $destination){
        $sights = Sight::where('destination_id',$destination->id)->get();
        return view('frontend.destination',compact('destination','sights'));
    }
    public function page(Page $page){
        return view('frontend.page',compact('page'));
    }
    public function sight(Sight $sight){
        $sights = Sight::where('country_id',$sight->country_id)->where('id','<>',$sight->id)->get();
        return view('frontend.sight',compact('sight','sights'));
    }
    public function taylor(){
        return view('frontend.taylor');
    }
    public function contactgeneral(){
        return view('forms.general');
    }
    public function contactDestination(Destination $destination){
        return view('forms.destination',compact('destination'));
    }
    public function contactPage(Page $page){
        return view('forms.page',compact('page'));
    }
    public function contactSight(Sight $sight){
        $countries = Country::where('subregion_id',$sight->subregion_id)->where('id','<>',$sight->country_id)->get();
        $items = Sight::where('country_id',$sight->country_id)->where('id','<>',$sight->id)->get();
        return view('forms.sight',compact('sight','countries','items'));
    }
}
