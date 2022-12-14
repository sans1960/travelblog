<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageContact;

class PageContactController extends Controller
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
        $pagecontacts = PageContact::all();
        return view('admin.contactosPage.index',compact('pagecontacts'));
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
            'phone'=>'max:20',
            'email'=>'required|email',
            'city'=>'max:20',
            'state'=>'max:20',
            'zipcode'=>'max:20',
            'message'=>'max:255',
        ]);
        $contact = PageContact::create($request->all());
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
        $contact = PageContact::where('id',$id)->get();
        return view('admin.contactosPage.show',compact('contact'));
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
        $contact = PageContact::find($id);
        $contact->delete();
        return redirect()->route('contactos.page.index');
    }
}
