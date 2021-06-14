<?php

namespace App\Http\Controllers;

use App\Models\Poble;
use Illuminate\Http\Request;

class PobleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pobles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pobles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Poble::create($request->all());
        return redirect()->route('pobles.index')->with('success','Poble afegit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poble  $poble
     * @return \Illuminate\Http\Response
     */
    public function show(Poble $poble)
    {
        return view('pobles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poble  $poble
     * @return \Illuminate\Http\Response
     */
    public function edit(Poble $poble)
    {
        return view('pobles.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poble  $poble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poble $poble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poble  $poble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poble $poble)
    {
        //
    }
}
