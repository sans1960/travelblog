<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Destination;
use App\Models\ImageDestination;

class ImageDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagedestinations = ImageDestination::all();
        return view('admin.imagedestinations.index',compact('imagedestinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        return view('admin.imagedestinations.create',compact('destinations'));
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
           
            'title'=>'required',
            'image' => 'required',
            'destination_id' => 'required'
        ]);
        $request->image->store('imagedestination', 'public');
        $imagedestination = new ImageDestination();
        $imagedestination->title = $request->title;
        $imagedestination->slug = Str::slug($request->title);
        $imagedestination->image = $request->image->hashName();
        $imagedestination->caption = $request->caption;
        $imagedestination->destination_id = $request->destination_id;
        $imagedestination->save();
        return redirect()->route('admin.imagedestinations.index')->with('message','Imagen Destino creado') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ImageDestination $imagedestination)
    {
        return view('admin.imagedestinations.show',compact('imagedestination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageDestination $imagedestination)
    {
        $destinations = Destination::all();
        return view('admin.imagedestinations.edit',compact('imagedestination','destinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageDestination $imagedestination)
    {
        $request->validate([
           
            'title'=>'required',
            'image' => 'required',
            'destination_id' => 'required'
        ]);
        if($request->hasFile('image')){
            unlink(storage_path('app/public/imagedestination/'.$imagedestination->image));
            $request->image->store('imagedestination', 'public');
            $imagedestination->image = $request->image->hashName();
        }
        $imagedestination->title = $request->title;
        $imagedestination->slug = Str::slug($request->title);
        
        $imagedestination->caption = $request->caption;
        $imagedestination->destination_id = $request->destination_id;
        $imagedestination->update();
        return redirect()->route('admin.imagedestinations.index')->with('message','Imagen Destino actualizada') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageDestination $imagedestination)
    {
        if(file_exists(storage_path('app/public/imagedestination/'.$imagedestination->image))){
            unlink(storage_path('app/public/imagedestination/'.$imagedestination->image));

        }
        $imagedestination->delete();
        return redirect()->route('admin.imagedestinations.index')->with('message','Imagen Destino eliminado');
    }
}
