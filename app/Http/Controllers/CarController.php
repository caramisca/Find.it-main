<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
{
    public function index()
    {
        return view('auto-listings');
    }

    public function show(Request $request,$vin)
    {   // Debugging: Output 'records' for debugging purposes
        $apiUrl = "https://auto.dev/api/vin/".$vin."?apikey=ZrQEPSkKYWxleGlzZGFuZHkxNUBnbWFpbC5jb20=";

        $response = Http::withOptions([
            'verify' => false,
        ])->get($apiUrl);

        $records = session('carRecords', []);
        $carDetailsResponse = collect($records)->firstWhere('vin', $vin);

        if ($response->successful()) {
            $carDetails = $response->json();
            return view('car-details', ['carDetails'=>$carDetails,'vin' => $vin]);
        } else {
            //return view('car-details')->withErrors('Error fetching car details.');
        }
    }

    public function fetchAutoListings(Request $request)
    {
        // Assuming you have the logic to get the auto listings
        // For example, using an external API or database query
        $query = $request->input('message');

        // Mock response from external API
        $response = [
            'link' => 'https://example.com',
            'auto_dev_response' => [
                'records' => [
                    [
                        'vin' => 'WBSHD9318MBK05083',
                        'year' => 2021,
                        'make' => 'BMW',
                        'model' => 'M5',
                        'thumbnailUrl' => 'https://example.com/car.jpg',
                        'displayColor' => 'Blue',
                        'price' => '$50,000',
                    ],
                    // Add more mock records as needed
                ]
            ]
        ];

        return response()->json($response);
    }

    public function handleCarDetails(Request $request)
    {
        // Store the records data in the session
        $records = $request->input('records');
        session(['carRecords' => $records]);

        return response()->json(['success' => true]);
    }
}
