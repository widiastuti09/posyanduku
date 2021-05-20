<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasibalita;

class RegistrasibalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $registrasibalitas = Registrasibalita::all();
        return view('HalamanAdmin.registerbalita',compact('registrasibalitas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addregisterbalita()
    {
        return view('Registerbalita.addregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Registrasibalita::create([
        'namabalita'    => $request -> namabalita,
        'tempatlahir'   => $request -> tempatlahir,
        'tanggallahir'  => $request -> tanggallahir,
        'jeniskelamin'  => $request -> jeniskelamin,
        'namaayah'      => $request -> namaayah,
        'namaibu'       => $request -> namaibu,
        'rt'            => $request -> rt,
        'rw'            => $request -> rw,
        'usia'          => $request -> usia,
        'bblahir'       => $request -> bblahir,
        'pblahir'       => $request -> pblahir,
        'nokk'          => $request -> nokk,
        'nikbalita'     => $request -> nikbalita,
        'telp'          => $request -> telp
        ]);

        return redirect('register')->with('toast_success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regbal = Registrasibalita::findorfail($id);
        return view('Registerbalita.detail',Compact('regbal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regbal = Registrasibalita::findorfail($id);
        return view('Registerbalita.editregister', Compact('regbal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regbal = Registrasibalita::findorfail($id);
        $regbal->update($request->all());
        return redirect('register')->with('toast_success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regbal = Registrasibalita::findorfail($id);
        $regbal->delete();
        return back()->with('toast_success', 'Data berhasil dihapus');
    }
}
