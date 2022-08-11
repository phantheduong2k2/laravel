<?php

namespace App\Http\Controllers;

use App\Models\position_user;
use App\Http\Requests\Storeposition_userRequest;
use App\Http\Requests\Updateposition_userRequest;

class PositionUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storeposition_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeposition_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\position_user  $position_user
     * @return \Illuminate\Http\Response
     */
    public function show(position_user $position_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\position_user  $position_user
     * @return \Illuminate\Http\Response
     */
    public function edit(position_user $position_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateposition_userRequest  $request
     * @param  \App\Models\position_user  $position_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updateposition_userRequest $request, position_user $position_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\position_user  $position_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(position_user $position_user)
    {
        //
    }
}
