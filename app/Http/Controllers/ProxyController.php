<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    public function forwardRequest(Request $request)
    {
        $apiUrl = "http://172.28.97.167:888//tawon_api/servicespayroll/";
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer b1d25f0445dca71059e5edf2833971c8', 
            'User-Agent' => 'wilson',
            'access_token' => '2e51b898b612124c97e1cab7bf8f0f8e'
        ])->post($apiUrl, $request->all());

        
        return response()->json($response->json(), $response->status());
    }
}
