<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return $user;
    }


    /**
     * Display a listing of the resource by id.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */    
    public function view($username) {
        $user = User::find($username);
        return $user;
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
            'username' => 'required',
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required'

        ]);

        $values = array (
            'username' => $request->username,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        );
        return User::create($values);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $user = User::find($username);
        // return view edit form
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($username, Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        $user = User::find($username);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete($username)
    {
        $user = User::find($username);
        $user->delete();
        return true;
    }
}
