<?php

namespace App\Http\Controllers;

use App\Models\DcComic;
use Error;
use Illuminate\Http\Request;

class DcComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comic_book = DcComic::all();
        return view('dc_comics.index', compact('comic_book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dc_comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new DcComic();
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        $newComic->price = $data["price"];
        $newComic->sale_date = $data["sale_date"];

        $newComic->save();

        return redirect()->route('dc_comics.show', ['dc_comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //1: recuperare l'oggetto fumetto dal db, attraverso l'id
        $dc_comic = DcComic::findOrFail($id);
        //2: mostare la pagina show, passando il fumetto nella pagina (nella view)
        return view('dc_comics.show', compact('dc_comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dc_comic = DcComic::findOrFail($id);
        return view('dc_comics.edit', compact('dc_comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id) //request contiene i dati del form che è gia stato modificato.
    {
        // Da request ci arrivano i dati nuovi da inserire nel record
        $data = $request->all();
        
        //prendiamo il vecchio fumetto e poi aggiorniamolo
        $oldComic = DcComic::findOrFail($id);

        $oldComic->update($data); //questo update funziona grazie al fillable nel model

        return redirect()->route('dc_comics.show', ['dc_comic' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $dc_comic = DcComic::findOrFail($id);
        $dc_comic->delete();
        return redirect()->route('dc_comics.index');
        
    }
}
