<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $latestEpisode = Episode::orderBy('date', 'desc')->first();
        return view('index', ['latestEpisode' => $latestEpisode]);
    }
}
