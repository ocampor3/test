<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $articles = article::orderBy('title', 'desc')->take(1)->get();
        //return $article = article::where('title', 'article Two')->get();
        //$articles = DB::select('SELECT * FROM articles')

       $articles = article::orderBy('Id', 'desc')->paginate(10);
       return view('articles.index')-> with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'Title' => 'required',
                'Type' => 'required',
                'Value' => 'required',

        ]);
        // Create article
        $article = new article;
        $article->Title = $request->input('Title');
        $article->Type = $request->input('Type');
        $article->Value = $request->input('Value');
        /** $article->user_id = auth()->user()->id;*/
        $article->save();

        return redirect('/articles')->with('success', 'Article Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $article = article::find($Id);
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $article = article::find($Id);
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        $this->validate($request,[
            'Title' => 'required',
            'Type' => 'required',
            'Value' => 'required',

    ]);
    // Create article
    $article = article::find($Id);
    $article->Title = $request->input('Title');
    $article->Type = $request->input('Type');
    $article->Value = $request->input('Value');
    $article->save();

    return redirect('/articles')->with('success', 'article Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        $article = article::find($Id);
        $article->delete();
        return redirect('/articles')->with('success', 'article Removed');
    }
}
