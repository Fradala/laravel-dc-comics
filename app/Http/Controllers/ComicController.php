<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $comics = Comic::all();

        return view('guest.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=> ['required','min:4'],
            'description'=> ['required','min:10', 'max:2000'],
            'thumb'=> ['required', 'min:4', 'url:http,https'],
            'price'=> ['required', 'min:3', 'max:30'],
            'series'=> ['required', 'min:4', 'max:40'],
            'sale_date'=> ['required',],
            'type'=> ['required']



        ]);


        $newComicData = $request->all();

        //$newComic = new Comic();
        //$newComic->title = $newComicData['title'];
        //$newComic->description = $newComicData['description'];
        //$newComic->thumb = $newComicData['thumb'];
        //$newComic->price = $newComicData['price'];
        //$newComic->series = $newComicData['series'];
        //$newComic->sale_date = $newComicData['sale_date'];
        //$newComic->type = $newComicData['type'];
        //$newComic->save();

        $newComic = Comic::create($newComicData);

        return redirect()->route('guest.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('guest.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=> ['required','min:4', Rule::unique('comics')->ignore($id)],
            'description'=> ['required','min:10', 'max:2000'],
            'thumb'=> ['required', 'min:4', 'url:http,https'],
            'price'=> ['required', 'min:3'],
            'series'=> ['required', 'min:4'],
            'sale_date'=> ['required',],
            'type'=> ['required']



        ]);

        $data = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()-> route('guest.comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
