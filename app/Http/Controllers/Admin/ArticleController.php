<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Page;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();
        return view('admin.articles.create',compact('pages'));
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
            'page_id'=>'required',
            'caption'=>'required',
            'body' => 'required',
            'order' => 'required',
            'image' => 'required',
            
        ]); 

        $request->image->store('articles', 'public');
        $article = new Article();
        $article->name = $request->name;
        $article->image = $request->image->hashName();
        $article->slug = Str::slug($request->name);
        $article->body = $request->body;
        $article->caption = $request->caption;
        $article->order = $request->order;
        $article->page_id = $request->page_id;
      
        $article->save();
        return redirect()->route('admin.articles.index')->with('message','Article Created') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $pages = Page::all();
        return view('admin.articles.edit',compact('article','pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'name'=>'required',
            'page_id'=>'required',
            'caption'=>'required',
            'body' => 'required',
            'order' => 'required',
            'image' => 'required',   
        ]); 
        if($request->hasFile('image')){
            unlink(storage_path('app/public/articles/'.$article->image));
            $request->image->store('articles', 'public');
            $article->image = $request->image->hashName();
        }
        $article->name = $request->name;

        $article->slug = Str::slug($request->name);
        $article->body = $request->body;
        $article->caption = $request->caption;
        $article->order = $request->order;
        $article->page_id = $request->page_id;
      
        $article->update();
        return redirect()->route('admin.articles.index')->with('massage','Article Updated') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(file_exists(storage_path('app/public/articles/'.$article->image))){
            unlink(storage_path('app/public/articles/'.$article->image));

        }
        $article->delete();
        return redirect()->route('admin.articles.index')->with('message','Article Deleted');
    }
    
}
