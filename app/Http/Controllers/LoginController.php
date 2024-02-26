<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // Make API request to fetch random quote
        $response = Http::get('https://api.gameofthronesquotes.xyz/v1/random');
        $data = $response->json();
        $quote = $data['sentence'];

        // Pass the quote to the login view
        return view('home', ['quote' => $quote]);
    }

    // Other controller methods...
}
