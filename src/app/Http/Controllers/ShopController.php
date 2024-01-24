<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use Illuminate\Http\Request;



class ShopController extends Controller
{
        
    public function showRegisterForm()
    {

        $areas = Area::all();
        
        $genres = Genre::all();
        
        return view('shop-register', compact('areas', 'genres'));


    }

     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'area_id' => 'required', 
            'genre_id' => 'required', 
            'image_path' => 'required|image',
        ]);
        


        

        $shop = new Shop();
        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->area_id = $request->input('area_id');
        $shop->genre_id = $request->input('genre_id');

        // 画像のアップロード処理
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
            $shop->image_path = $imagePath;
        }

         $shop->save();

        // リダイレクトや他の処理を追加
         return redirect()->route('shop.register.form');
    }

    public function index(Request $request)
    {
     $area = $request->input('area', 'all');
    $genre = $request->input('genre', 'all');
    $keyword = $request->input('keyword', '');

    $shops = Shop::search($area, $genre, $keyword)->get();
    $areas = Area::all();
    dd($areas);
    $genres = Genre::all();

    return view('index', compact('shops', 'areas', 'genres'));
}
}