<?php

namespace App\Http\Controllers;

use App\Models\Zonasuser;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController as UserController;

/**
 * Class ZonasuserController
 * @package App\Http\Controllers
 */
class ZonasuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonasusers = Zonasuser::paginate();

        return view('zonasuser.index', compact('zonasusers'))
            ->with('i', (request()->input('page', 1) - 1) * $zonasusers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonasuser = new Zonasuser();
        return view('zonasuser.create', compact('zonasuser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_zon = $request->input('id_zon');
        $idusu = $request->input('id');

        $productosused = Zonasuser::create([
           'id_zon' => $id_zon,
           'id_usu' => $idusu

      ]);
       // $productosused = Productosused::create();

       return redirect()->route('users.edit',$idusu);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zonasuser = Zonasuser::find($id);

        return view('zonasuser.show', compact('zonasuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zonasuser = Zonasuser::find($id);

        return view('zonasuser.edit', compact('zonasuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Zonasuser $municipiosuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zonasuser $zonasuser)
    {
        request()->validate(Zonasuser::$rules);

        $zonasuser->update($request->all());

        return redirect()->route('zonasusers.index')
            ->with('success', 'Zonasuser updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id,Request $request)
    {
        $zonasuser = Zonasuser::find($id)->delete();
        $idusu = $request->input('id');

        return redirect()->route('users.edit',$idusu);
    }
}
