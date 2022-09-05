<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index() {
        $episodes = Episode::all()->sortByDesc('date');
        return view('episodes.index', ['episodes' => $episodes]);
    }

    public function show(Episode $episode) {
        
    }
}
