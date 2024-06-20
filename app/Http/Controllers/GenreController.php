<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function getGenre()
    {
        $response = Http::get('http://localhost:3000/genres');
        $data = $response->json();
        return view('dashboard', ['genres' => $data]);
        // return view('message', ['genres' => $data]);
    }

}
