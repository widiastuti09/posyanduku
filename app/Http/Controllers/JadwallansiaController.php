<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwallansia;

class JadwallansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadlan = Jadwallansia::all();
        return view ('Jadwal.Lansia.jadwal', compact('jadlan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadlan = Jadwallansia::all();
        return view('Jadwal.Lansia.addjadwal',compact('jadlan'));
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

        Jadwallansia::create([
            'tanggal' => $request -> tanggal,
            'waktu'     => $request -> waktu,
            'keterangan' => $request -> keterangan,
            'status'    => $request -> status,
        ]);

        return redirect('/Jadwal-Lansia')->with('toast_success', 'Data berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadlan = Jadwallansia::findorfail($id);
        return view ('Jadwal.Lansia.detailjadwal', compact('jadlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadlan = Jadwallansia::findorfail($id);
        return view ('Jadwal.Lansia.editjadwal', compact('jadlan'));
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
        $jadlan = Jadwallansia::findorfail($id);
        $jadlan -> update ($request->all());
        return redirect('/Jadwal-Lansia')->with('toast_success', 'Data berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadlan = Jadwallansia::findorfail($id);
        $jadlan -> delete();
        return back ()->with('toast_success', 'Data berhasil Dihapus!');
    }
}
