<?php

namespace App\Http\Controllers;

use App\Models\serviceProvider;
use App\Http\Requests\StoreserviceProviderRequest;
use App\Http\Requests\UpdateserviceProviderRequest;

class ServiceProviderController extends Controller
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
     * @param  \App\Http\Requests\StoreserviceProviderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreserviceProviderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\serviceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(serviceProvider $serviceProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serviceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceProvider $serviceProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateserviceProviderRequest  $request
     * @param  \App\Models\serviceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateserviceProviderRequest $request, serviceProvider $serviceProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serviceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceProvider $serviceProvider)
    {
        //
    }
}
