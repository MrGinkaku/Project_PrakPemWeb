<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BookController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://api.example.com/books');
        $books = json_decode($response->getBody());

        return view('books.index', ['books' => $books]);
    }
}
