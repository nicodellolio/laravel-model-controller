<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        
        $data = [
            'movies' => $movies,
            'footer_items' => [
                'Via Dei Programmatori, 432',
                'Milano, Lombardia, 20019',
                '0993 434 2321 12',
                'icampionidilarabelsiamonoi@gmail.com',
                'Vieni a trovarci'
            ]
        ];


        return view('guests.home', $data);
    }
}
