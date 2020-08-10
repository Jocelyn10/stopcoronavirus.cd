<?php

namespace App\Http\Controllers;

use App\FluxZone;
use Illuminate\Http\Request;

class FluxZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $zones = FluxZone::select('name as origin')->get();
            return response()->json($zones);
        } catch (\Throwable $th) {
            if (env('APP_DEBUG') == true) {
                return response($th)->setStatusCode(500);
            }
            return response($th->getMessage())->setStatusCode(500);
        }
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
     * @param  \App\FluxZone  $fluxZone
     * @return \Illuminate\Http\Response
     */
    public function show(FluxZone $fluxZone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FluxZone  $fluxZone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FluxZone $fluxZone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FluxZone  $fluxZone
     * @return \Illuminate\Http\Response
     */
    public function destroy(FluxZone $fluxZone)
    {
        //
    }
}