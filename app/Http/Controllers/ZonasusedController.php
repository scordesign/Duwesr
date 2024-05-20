<?php

namespace App\Http\Controllers;

use App\Models\Zonasused;
use App\Http\Requests\ZonasusedRequest;

/**
 * Class ZonasusedController
 * @package App\Http\Controllers
 */
class ZonasusedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zonasuseds = Zonasused::paginate();

        return view('zonasused.index', compact('zonasuseds'))
            ->with('i', (request()->input('page', 1) - 1) * $zonasuseds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zonasused = new Zonasused();
        return view('zonasused.create', compact('zonasused'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ZonasusedRequest $request)
    {
        Zonasused::create($request->validated());

        return redirect()->route('zonasuseds.index')
            ->with('success', 'Zonasused created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $zonasused = Zonasused::find($id);

        return view('zonasused.show', compact('zonasused'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $zonasused = Zonasused::find($id);

        return view('zonasused.edit', compact('zonasused'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ZonasusedRequest $request, Zonasused $zonasused)
    {
        $zonasused->update($request->validated());

        return redirect()->route('zonasuseds.index')
            ->with('success', 'Zonasused updated successfully');
    }

    public function destroy($id)
    {
        Zonasused::find($id)->delete();

        return redirect()->route('zonasuseds.index')
            ->with('success', 'Zonasused deleted successfully');
    }
}
