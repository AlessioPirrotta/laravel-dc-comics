<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics= config('comics');
        $data = ['character', 'comic', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
        return view('pages.home', compact('comics', 'data'));
    }
}
