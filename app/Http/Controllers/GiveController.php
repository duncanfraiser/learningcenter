<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Give;

class GiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $give = Give::all()->last();
        return view('give.index', compact('give'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('give.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pic = request()->file('doc');
        $pic->storeAs('public/files', $pic->getClientOriginalName());
        $give = new Give;
        $give->body = $request->body;
        $give->title = $request->title;
        $give->doc = $pic->getClientOriginalName();
        $give->save();
        return redirect('give');
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
        $give = Give::findOrFail($id);
        return view('give.edit', compact('give'));
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
        $give = Give::findOrFail($id);
        $give->body=$request->body;
        $give->title=$request->title;
        $pic = request()->file('doc');
        if($pic != null){
        $pic->storeAs('public/files', $pic->getClientOriginalName()); 
        $give->doc = $pic->getClientOriginalName();
        }
        $give->save();
        return redirect('give');
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
