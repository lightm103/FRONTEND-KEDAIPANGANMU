<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetDataJson extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function data_nasional(Request $request)
    {
        $jenisDataPanel = $request->query('jenisDataPanel');
        $startDate = $request->query('startDate');
        $endDate = $request->query('endDate');
    
        $response = Http::get("https://panelharga.badanpangan.go.id/data/harga-nasional-range/{$startDate}/{$endDate}/{$jenisDataPanel}");
        return $response->json();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
