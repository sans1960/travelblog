<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Destination;
use App\Models\Category;
use App\Models\Sight;

class SightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sights = Sight::all();
        return view('admin.sights.index',compact('sights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $destinations = Destination::all();
        return view('admin.sights.create',compact('destinations','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'title' => 'required',
            'extract' => 'required',
            'body' => 'required',
            'date' => 'required',
            'destination_id' => 'required',
            'subregion_id' => 'required',
            'country_id' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'caption' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',
        ]);
        $request->image->store('sights', 'public');
        $sight = new Sight();
        $sight->title = $request->title;
        $sight->image = $request->image->hashName();
        $sight->slug = Str::slug($request->title);
        $sight->extract = $request->extract;
        $sight->body = $request->body;
        $sight->date = $request->date;
        $sight->destination_id = $request->destination_id;
        $sight->subregion_id = $request->subregion_id;
        $sight->country_id = $request->country_id;
        $sight->category_id = $request->category_id;
        $sight->caption = $request->caption;
        $sight->latitud = $request->latitud;
        $sight->longitud = $request->longitud;
        $sight->zoom = $request->zoom;
        $sight->save();
        return redirect()->route('admin.sights.index')->with('message','Sight Created') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sight $sight)
    {
        return view('admin.sights.show',compact('sight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.sights.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
