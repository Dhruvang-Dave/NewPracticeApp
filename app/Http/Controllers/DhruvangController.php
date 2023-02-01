<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDhruvangRequest;
use App\Http\Requests\UpdateDhruvangRequest;
use App\Models\Dhruvang;

class DhruvangController extends Controller
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
     * @param  \App\Http\Requests\StoreDhruvangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDhruvangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dhruvang  $dhruvang
     * @return \Illuminate\Http\Response
     */
    public function show(Dhruvang $dhruvang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dhruvang  $dhruvang
     * @return \Illuminate\Http\Response
     */
    public function edit(Dhruvang $dhruvang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDhruvangRequest  $request
     * @param  \App\Models\Dhruvang  $dhruvang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDhruvangRequest $request, Dhruvang $dhruvang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dhruvang  $dhruvang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dhruvang $dhruvang)
    {
        //
    }
}
