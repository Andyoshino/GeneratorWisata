<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;
use App\Http\Requests\StoreTempatWisataRequest;
use App\Http\Requests\UpdateTempatWisataRequest;
use Illuminate\Http\Request;

class TempatWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tempatWisata = TempatWisata::all();
        return $tempatWisata;
    }


    /**
     * Display a listing of the resource by id.
     *
     * @param  \App\Models\TempatWisata  $tempatWisata
     * @return \Illuminate\Http\Response
     */    
    public function view($id) {
        $tempatWisata = TempatWisata::find($id);
        return $tempatWisata;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view form create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'city' => 'required',
            'description' => 'required'
        ]);

        $values = array (
            'name' => $request->name,
            'city' => $request->city,
            'description' => $request->description
        );
        
        return TempatWisata::create($values);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TempatWisata  $tempatWisata
     * @return \Illuminate\Http\Response
     */
    public function show(TempatWisata $tempatWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TempatWisata  $tempatWisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tempatWisata = TempatWisata::find($id);
        // return view edit form
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  \App\Models\TempatWisata  $tempatWisata
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'city' => 'required',
            'description' => 'required'
        ]);

        $tempatWisata = TempatWisata::find($id);
        $tempatWisata->name = $request->name;
        $tempatWisata->city = $request->city;
        $tempatWisata->description = $request->description;
        $tempatWisata->save();
        return $tempatWisata;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TempatWisata  $tempatWisata
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tempatWisata = TempatWisata::find($id);
        $tempatWisata->delete();
        return true;
    }
}
