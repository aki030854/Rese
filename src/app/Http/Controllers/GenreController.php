<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create()
{
    return view('genre'); 
}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genres,genre',
        ]);

        Genre::create([
            'genre' => $request->input('name'),
        ]);

         return redirect()->route('genre.create');

}
}
