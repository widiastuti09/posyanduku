<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwalbumil;

class JadwalbumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadmil = Jadwalbumil::all();
        return view ('Jadwal.Bumil.jadwal', compact('jadmil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadmil = Jadwalbumil::all();
        return view('Jadwal.Bumil.addjadwal',compact('jadmil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'tanggal' => 'required',
            'waktu'     => 'required',
            'keterangan' => 'required',
            'status'    => 'required'
        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong'
        ];

        $this->validate($request, $rules, $messages);

        Jadwalbumil::create([
            'tanggal' => $request -> tanggal,
            'waktu'     => $request -> waktu,
            'keterangan' => $request -> keterangan,
            'status'    => $request -> status,
        ]);

        return redirect('/Jadwal-Bumil')->with('toast_success', 'Data berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadmil = Jadwalbumil::findorfail($id);
        return view ('Jadwal.Bumil.detailjadwal', compact('jadmil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadmil = Jadwalbumil::findorfail($id);
        return view ('Jadwal.Bumil.editjadwal', compact('jadmil'));
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
        $jadmil = Jadwalbumil::findorfail($id);
        $jadmil -> update ($request->all());
        return redirect('/Jadwal-Bumil')->with('toast_success', 'Data berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadmil = Jadwalbumil::findorfail($id);
        $jadmil -> delete();
        return back ()->with('toast_success', 'Data berhasil Dihapus!');
    }
}
