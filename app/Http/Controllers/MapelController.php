<?php

namespace App\Http\Controllers;

use App\Models\MapelModel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = MapelModel::all();
        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MapelModel::create([
            'kode_mapel' => $request->kode_mapel,
            'mapel' => $request->mapel,
            'kkm'  => $request->kkm
        ]);


        return redirect('mapel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mapel = MapelModel::findOrFail($id);
        return view('mapel.show', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mapel = MapelModel::findOrFail($id);
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mapel = MapelModel::findOrFail($id);
        $mapel->update([
            'kode_mapel' => $request->kode_mapel,
            'mapel' => $request->mapel,
            'kkm' => $request->kkm
        ]);
        return redirect('mapel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = MapelModel::findOrFail($id);
        $mapel->delete();
        return redirect()->route('mapel.index');
    }
}
