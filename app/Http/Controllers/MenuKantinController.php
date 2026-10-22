<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MenuKantin;
use Illuminate\Http\Request;

class MenuKantinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menukantin = MenuKantin::paginate(10);
        return view('menukantin.index', compact('menukantin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menukantin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_menu' => 'required|unique:menu_kantins,kode_menu',
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'status' => 'required',
            'keterangan' => 'nullable',
        ]);

        MenuKantin::create($validated);

        return redirect()->route('menukantin.index')->witth('success', 'Menu kantin berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuKantin $menuKantin)
    {
        return view('menukantin.show', compact('menuKantin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuKantin $menuKantin)
    {
        return view('menukantin.edit', compact('menuKantin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuKantin $menuKantin)
    {
        $validated = $request->validate([
            'kode_menu' => 'required|unique:menu_kantins,kode_menu',
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'status' => 'required',
            'keterangan' => 'nullable',
        ]);

        $menuKantin->update($validated);

        return redirect()->route('menukantin.edit')->with('success', 'Menu berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuKantin $menuKantin)
    {
        $menuKantin->delete();
        return redirect()->route('menukantin.destroy')->with('success', 'Menu berhasil dihapus!');
    }
}
