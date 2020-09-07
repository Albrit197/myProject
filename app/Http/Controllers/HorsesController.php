<?php

namespace App\Http\Controllers;

use App\Horses;
use Illuminate\Http\Request;

class HorsesController extends Controller
{
    public function index() {
        return view('horses.index', ['horses' => Horses::orderBy('name')->get()]);
    }
    public function create() {
        return view('horses.create');
    }
    public function store(Request $request) {
        $horses = new Horses();
     // can be used for seeing the insides of the incoming request
         // var_dump($request->all()); die();
        $horses->fill($request->all());
        $horses->save();
        return redirect()->route('horses.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\horses  $horses
     * @return \Illuminate\Http\Response
     */
    public function show(horses $horses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\horses  $horses
     * @return \Illuminate\Http\Response
     */
    public function edit(horses $horses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\horses  $horses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, horses $horses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\horses  $horses
     * @return \Illuminate\Http\Response
     */
    public function destroy(horses $horses)
    {
        //
    }
}
