<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use App\Http\Requests\ZonaRequest;

/**
 * Class ZonaController
 * @package App\Http\Controllers
 */
class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zonas = Zona::paginate();

        return view('zona.index', compact('zonas'))
            ->with('i', (request()->input('page', 1) - 1) * $zonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zona = new Zona();
        return view('zona.create', compact('zona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ZonaRequest $request)
    {
        Zona::create($request->validated());

        return redirect()->route('zonas.index')
            ->with('success', 'Zona created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $zona = Zona::find($id);

        return view('zona.show', compact('zona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $zona = Zona::find($id);

        return view('zona.edit', compact('zona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ZonaRequest $request, Zona $zona)
    {
        $zona->update($request->validated());

        return redirect()->route('zonas.index')
            ->with('success', 'Zona updated successfully');
    }

    public function destroy($id)
    {
        Zona::find($id)->delete();

        return redirect()->route('zonas.index')
            ->with('success', 'Zona deleted successfully');
    }
}
