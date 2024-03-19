<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $comics= config('comics');
        $comics= Comics::all();

        $data = ['character', 'comic', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
        return view('pages.comicsView.index', compact('comics', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = ['character', 'comic', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];

        return view ('pages.comicsview.create', compact( 'data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->All();
        $newComic= new Comics();
        $newComic->fill($formData);
        $newComic->save();
        $comics= Comics::all();
        $data = ['character', 'comic', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
        return view('pages.comicsView.index', compact('comics', 'data'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comics::find($id);
        // findOrFail
        $data = ['character', 'comic', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
        return view ('pages.comicsview.show', compact('comic', 'data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comics::find($id);
        // findOrFail
        $data = ['character', 'comic', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
        return view ('pages.comicsview.edit', compact('comic', 'data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->All();
        $comic = Comics::find($id);
        $comic->update($formData);
        return redirect()->route('comics.show', ['comic'=> $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comics::find($id);
        $comic ->delete();
        // findOrFail
        // $data = ['character', 'comic', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
        return redirect()->route('comics.index');
    }
}
