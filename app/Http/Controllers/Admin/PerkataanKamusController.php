<?php

namespace App\Http\Controllers\Admin;

use App\Models\Perkataan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerkataanKamusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semuaperkataankamus = Perkataan::all();
        return view('admin.perkataan_kamus.index',compact('semuaperkataankamus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perkataan_kamus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store perkataan guna relationship - model
        $perkataankamus = new Perkataan();
        
        $perkataankamus->perkataan = $request->perkataan;
        $perkataankamus->maksud_perkataan = $request->maksud_perkataan;
        $perkataankamus->contoh_ayat = $request->contoh_ayat;
        $perkataankamus->maksud_ayat = $request->maksud_ayat;

        //save
        $perkataankamus->save();

        return redirect()->route('perkataan_kamus:index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perkataan $perkataan)
    {
        return view('admin.perkataan_kamus.edit',compact('perkataan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perkataan $perkataan)
    {
        $perkataan->perkataan = $request->perkataan;
        $perkataan->maksud_perkataan = $request->maksud_perkataan;
        $perkataan->contoh_ayat = $request->contoh_ayat;
        $perkataan->maksud_ayat = $request->maksud_ayat;

        $perkataan->save();

        return redirect()->route('perkataan_kamus:index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkataan $perkataan)
    {
        $perkataan->delete();

        return redirect()->route('perkataan_kamus:index');
    }

}
