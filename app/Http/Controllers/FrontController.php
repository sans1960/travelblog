<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class FrontController extends Controller
{
    public function index(){
        $destinations = Destination::all();
        return view('frontend.index',compact('destinations'));
    }
}
