<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class productsCon extends Controller
{
    public function product()
    {
        // API endpoint and parameters
        $endpoint = '/products';
        $parameters = ['filter' => ['limit' => -1]];

// Make the API request
        $response = $this->makeApiRequestZehad($endpoint, $parameters);

// Handle the response
        if ($response->successful()) {
            $data = $response->json();
            return view('items/item', ['data' => $data]);
        } else {
            return $response->body();
        }

    }

    private function makeApiRequestZehad($endpoint, $parameters): \Illuminate\Http\Client\Response
    {
        $baseUrl = 'https://store.zehadkhan.com/wc-api/v3';
        $username = env('API_USERNAME');
        $password = env('API_PASSWORD');

        $request = Http::withBasicAuth($username, $password);

        $reqGetting= $request->get($baseUrl . $endpoint, $parameters);

        return $reqGetting;
    }
}
