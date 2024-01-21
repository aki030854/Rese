<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function create()
    {
        return view('area'); // ビューのパスを修正
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:areas,area', 
        ]);

        Area::create([
            'area' => $request->input('name'), 
        ]);

        return redirect()->route('area.create');

        
    }
}