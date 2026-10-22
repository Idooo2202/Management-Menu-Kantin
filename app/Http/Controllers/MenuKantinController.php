<?php

namespace App\Http\Controllers;

use App\Models\MenuKantin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'kode_menu' => ['required', 'string', 'max:50', 'unique:menu_kantins,kode_menu'],
            'nama_menu' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'harga' => ['required', 'numeric', 'min:0'],
            'stok' => ['required', 'integer', 'min:0'],
            'status' => ['required', 'string', 'max:50'],
            'keterangan' => ['nullable', 'string'],
        ]);

        MenuKantin::create($validated);

        return redirect()->route('menukantin.index')->with('success', 'Menu berhasil ditambahkan.');
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
            'kode_menu' => ['required', 'string', 'max:50', Rule::unique('menu_kantins', 'kode_menu')->ignore($menuKantin->id)],
            'nama_menu' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'harga' => ['required', 'numeric', 'min:0'],
            'stok' => ['required', 'integer', 'min:0'],
            'status' => ['required', 'string', 'max:50'],
            'keterangan' => ['nullable', 'string'],
        ]);

        $menuKantin->update($validated);

        return redirect()->route('menukantin.index')->with('success', 'Menu berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuKantin $menuKantin)
    {
        $menuKantin->delete();

        return redirect()->route('menukantin.index')->with('success', 'Menu berhasil dihapus!');
    }
}
