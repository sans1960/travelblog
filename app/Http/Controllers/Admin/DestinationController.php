<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDestinationRequest;
use Illuminate\Support\Str;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinations.index',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDestinationRequest $request)
    {
        $request->image->store('destination', 'public');
        $destination = new Destination();
        $destination->name = $request->name;
        $destination->title = $request->title;
        $destination->subtitle = $request->subtitle;
        $destination->slug = Str::slug($request->name);
        $destination->image = $request->image->hashName();
        $destination->body = $request->body;
        $destination->sidebody = $request->sidebody;
        $destination->save();
        return redirect()->route('admin.destinations.index')->with('message','Destino creado') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        return view('admin.destinations.show',compact('destination'));
    }

    public function edit(Destination $destination)
    {
        return view('admin.destinations.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'subtitle'=>'required',
            'body' => 'required',
            'sidebody' => 'required',
            'image' => 'required',
        ]); 
        if($request->hasFile('image')){
            unlink(storage_path('app/public/destination/'.$destination->image));
            $request->image->store('destination', 'public');
            $destination->image = $request->image->hashName();
        }
        $destination->name = $request->name;
        $destination->title = $request->title;
        $destination->subtitle = $request->subtitle;
        $destination->slug = Str::slug($request->name);
       
        $destination->body = $request->body;
        $destination->sidebody = $request->sidebody;
        $destination->update();
        return redirect()->route('admin.destinations.index')->with('message','Destino actualizado') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        if(file_exists(storage_path('app/public/destination/'.$destination->image))){
            unlink(storage_path('app/public/destination/'.$destination->image));

        }
        $destination->delete();
        return redirect()->route('admin.destinations.index')->with('message','Destino eliminado');
    }
  

   
}
