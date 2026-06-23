<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('is_available', true)
            ->orderBy('category')
            ->orderBy('name')
            ->get();
            
        return view('menu.index', compact('menus'));
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.show', compact('menu'));
    }
}
