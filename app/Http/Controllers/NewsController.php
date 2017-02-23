<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all()->last();

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // The storeAs() is defaulted to save in storage/app/public/pics (I added the pics extintion), to make the stored files accesable to the public you have to use the php artisan storage:link to Create a symbolic link from "public/storage" to "storage/app/public" then you can source an image as follows kennykens.df.ercorr.com/storage/pics/hoth.jpg. The storAs() passes 2 arguments (path,filename) methods are located on UploadedFile.php;
        $pic = request()->file('picture');
        $pic->storeAs('public/pics', $pic->getClientOriginalName());
        $news = new News;
        // $photo->title = $request->title;
        $news->img = $pic->getClientOriginalName();

        $news->save();

        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::findOrFail($id);
        return view('news.edit', compact('news'));
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
        $news = News::findOrFail($id);
        $news->title=$request->title;
        $news->body=$request->body;
        $pic = request()->file('picture');
        if($pic != null){
        $pic->storeAs('public/pics', $pic->getClientOriginalName()); 
        $news->img = $pic->getClientOriginalName();
        }
        $news->save();
        return redirect('/news');
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
