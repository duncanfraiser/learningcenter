<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handbook;

class HandbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $handbooks=Handbook::get();
        return view('handbook.index', compact('handbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('handbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pic = request()->file('handbook');
        $pic->storeAs('public/files', $pic->getClientOriginalName());
        $handbook = new Handbook;
        $handbook->title = $request->title;
        $handbook->handbook = $pic->getClientOriginalName();

        $handbook->save();

        return redirect('handbook');
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
        $handbook=Handbook::findOrFail($id);
        return view('handbook.edit', compact('handbook'));
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
        $handbook = Handbook::findOrFail($id);
        $handbook->title=$request->title;
        $pic = request()->file('handbook');
        if($pic != null){
        $pic->storeAs('public/files', $pic->getClientOriginalName()); 
        $handbook->handbook = $pic->getClientOriginalName();
        }
        $handbook->save();
        return redirect('/handbook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $handbook = Handbook::findOrFail($id);
        $handbook->delete();
        return redirect('/handbook');
    }
}
