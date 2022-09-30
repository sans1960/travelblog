<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Subregion;
use App\Models\Country;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(8);
        return view('admin.countries.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        return view('admin.countries.create',compact('destinations'));
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
           
            'name'=>'required',
            'image' => 'required',
            'destination_id' => 'required',
            'subregion_id' => 'required'
        ]);
        $request->image->store('countries', 'public');
        $country = new Country();
        $country->name = $request->name;
        $country->slug = Str::slug($request->name);
        $country->image = $request->image->hashName();
        $country->destination_id = $request->destination_id;
        $country->subregion_id = $request->subregion_id;
        $country->save();
        return redirect()->route('admin.countries.index')->with('message','Country Created') ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('admin.countries.show',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $destinations = Destination::all();
        return view('admin.countries.edit',compact('country','destinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $request->validate([
           
            'name'=>'required',
            'image' => 'required',
            'destination_id' => 'required',
            'subregion_id' => 'required'
        ]);
        if($request->hasFile('image')){
            unlink(storage_path('app/public/countries/'.$country->image));
            $request->image->store('countries', 'public');
            $country->image = $request->image->hashName();
           
        }
        $country->name = $request->name;
        $country->slug = Str::slug($request->name);
        $country->destination_id = $request->destination_id;
        $country->subregion_id = $request->subregion_id;
        $country->update();
        return redirect()->route('admin.countries.index')->with('message','Country updated') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if(file_exists(storage_path('app/public/countries/'.$country->image))){
            unlink(storage_path('app/public/countries/'.$country->image));

        }
        $country->delete();
        return redirect()->route('admin.countries.index')->with('message','Country Deleted');
    }


     public function getSubRegions(Request $request){
    $subregions = Subregion::where('destination_id',$request->destination_id)->orderBy('name')->get();
    if (count($subregions) > 0) {
        return response()->json($subregions);
    }
    }
}



    

