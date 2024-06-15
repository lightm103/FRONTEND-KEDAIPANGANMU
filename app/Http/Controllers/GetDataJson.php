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
        $authToken = 'mnmTA9pkGbh83rSGaw9hCfEEYZOC0q8j3uS5uKFb9U526DJTYZ3UIfi6zDXWxrYL'; 

        $response = Http::withHeaders([
            'X-Authorization' => $authToken,
        ])->get("https://webapi.badanpangan.go.id/api/panel-harga-pangan/data-harian/{$startDate}/{$endDate}/{$jenisDataPanel}/82");
        
        $data = $response->json();

        if ($data['success']) {
            return response()->json($data['data']);
        }

        return response()->json(['error' => 'Failed to fetch data'], 500);
    }

    public function getData($year, $jenisDataPanel)
    {
        // Replace with your actual API URL and add necessary headers or authentication if needed
        $url = "https://webapi.badanpangan.go.id/api/panel-harga-pangan/data-bulanan/{$year}/{$jenisDataPanel}/82";
        $response = Http::withHeaders([
            'X-Authorization' => 'mnmTA9pkGbh83rSGaw9hCfEEYZOC0q8j3uS5uKFb9U526DJTYZ3UIfi6zDXWxrYL'
        ])->get($url);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    
    public function getFSVAData()
    {
        $years = [2018, 2019, 2020, 2021, 2022, 2023];
        $cityCode = 6282; // Replace with the appropriate city code
        $apiKey = 'mnmTA9pkGbh83rSGaw9hCfEEYZOC0q8j3uS5uKFb9U526DJTYZ3UIfi6zDXWxrYL'; // Store your API key in the .env file

        $data = [];

        foreach ($years as $year) {
            $response = Http::withHeaders([
                'X-Authorization' => $apiKey,
            ])->get("https://webapi.badanpangan.go.id/api/fsva/data-nasional/{$year}/{$cityCode}");

            if ($response->successful()) {
                $data[$year] = $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch data'], 500);
            }
        }

        return response()->json($data);
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
