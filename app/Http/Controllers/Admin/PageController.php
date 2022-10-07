<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;
use App\Models\Tag;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.pages.create',compact('tags'));
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
            'tag_id'=>'required',
            'caption'=>'required',
            'description' => 'required',
            'conclusion' => 'required',
            'image' => 'required',
            'date' => 'required'
        ]); 
        $request->image->store('page', 'public');
        $page = new Page();
        $page->name = $request->name;
        $page->tag_id = $request->tag_id;
        $page->caption = $request->caption;
        $page->date = $request->date;
        $page->slug = Str::slug($request->name);
        $page->image = $request->image->hashName();
        $page->description = $request->description;
        $page->conclusion = $request->conclusion;
        $page->save();
        return redirect()->route('admin.pages.index')->with('message','Pagina creada') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('admin.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $tags = Tag::all();
        return view('admin.pages.edit',compact('tags','page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name'=>'required',
            'tag_id'=>'required',
            'caption'=>'required',
            'description' => 'required',
            'conclusion' => 'required',
            'image' => 'required',
            'date' => 'required'
        ]); 
        if($request->hasFile('image')){
            unlink(storage_path('app/public/page/'.$page->image));
            $request->image->store('page', 'public');
            $page->image = $request->image->hashName();
        }
        $page->name = $request->name;
        $page->slug = Str::slug($request->name);
        $page->description = $request->description;
        $page->conclusion = $request->conclusion;
        $page->caption = $request->caption;
        $page->date = $request->date;
        $page->tag_id = $request->tag_id;
        $page->update();
        return redirect()->route('admin.pages.index')->with('message','Page Updated') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if(file_exists(storage_path('app/public/page/'.$page->image))){
            unlink(storage_path('app/public/page/'.$page->image));

        }
        $page->delete();
        return redirect()->route('admin.pages.index')->with('message','Page Deleted');
    }
}
