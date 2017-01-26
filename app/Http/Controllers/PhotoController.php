<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(9);
        return view('photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.create');
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
        $photo = new Photo;
        $photo->title = $request->title;
        $photo->pic = $pic->getClientOriginalName();

        $photo->save();

        return redirect('photos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::FindOrFail($id);
        return view('photo.show', compact('photo'));
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
        //
    }
}
