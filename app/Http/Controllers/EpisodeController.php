<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index() {
        return view('episodes.index');
    }

    public function show(Episode $episode) {
        
    }
}
