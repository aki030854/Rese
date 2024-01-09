<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
public function showRegisterForm()
    {
        return view('shop-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'area' => 'required|string',
            'genre' => 'required|string',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = $request->file('image_path')->store('shop_images', 'public');

        Shop::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'area' => $request->input('area'),
            'genre' => $request->input('genre'),
            'image_path' => $imagePath,
        ]);

        return redirect()->route('home')->with('success', '店舗が登録されました！');
    }


     public function index(Request $request)
    {
        $area = $request->input('area', 'All');
        $genre = $request->input('genre', 'All');
        $keyword = $request->input('keyword', '');
        
        $shops = Shop::where('area', $area)
                      ->where('genre', $genre)
                      ->where('name', 'like', '%' . $keyword . '%')
                      ->get();
        
        return view('index', compact('shops'));
        
}
}
