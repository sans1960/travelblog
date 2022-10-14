<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralContact;

class GeneralContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
 
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = GeneralContact::all();
        return view('admin.contactosGeneral.index',compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required|max:20',
            'surname'=>'required|max:20',
            'phone'=>'required|max:20',
            'email'=>'required|email',
            'city'=>'required|max:20',
            'state'=>'required|max:20',
            'zipcode'=>'max:20',
            'message'=>'max:255',
        ]);
        $contact = GeneralContact::create($request->all());
        return view('forms.respuesta',compact('contact'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = GeneralContact::where('id',$id)->get();
        return view('admin.contactosGeneral.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $contact = GeneralContact::find($id);
        $contact->delete();
        return redirect()->route('contactos.general.index');
    }
}
