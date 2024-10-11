<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::paginate(10);
        return view('pages.menu-daftar', compact('menus')); 
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'harga' => 'required|numeric',
            'kuantitas' => 'required|integer'
        ]);
        $menu = Menu::create($request->all());
        return response()->json($menu, 201);
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return response()->json($menu);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_menu' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'harga' => 'required|numeric',
            'kuantitas' => 'required|integer'
        ]);
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        return response()->json($menu);
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        return response()->json(null, 204);
    }
    
}
