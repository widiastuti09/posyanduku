<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwalbalita;


class JadwalbalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadbal = Jadwalbalita::all();
        return view('Jadwal.Balita.jadwal',compact('jadbal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadbal = Jadwalbalita::all();
        return view('Jadwal.Balita.addjadwal', compact('jadbal'));
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
            'status'       => 'required',
        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong'
        ];

        $this->validate($request, $rules, $messages);

        Jadwalbalita::create([
            'tanggal' => $request -> tanggal,
            'waktu'     => $request -> waktu,
            'keterangan' => $request -> keterangan,
            'status'      => $request -> status,
        ]);

        return redirect('/Jadwal-Balita')->with('toast_success', 'Data berhasil Disimpan!');

        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadbal = Jadwalbalita::findorfail($id);
        return view ('Jadwal.Balita.detailjadwal', Compact('jadbal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadbal = Jadwalbalita::findorfail($id);
        return view('Jadwal.Balita.editjadwal', Compact('jadbal'));
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
        $jadbal = Jadwalbalita::findorfail($id);
        $jadbal ->update($request->all());
        return redirect('/Jadwal-Balita')->with('toast_success', 'Data berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadbal = Jadwalbalita::findOrFail($id);
        $jadbal->delete();
        return back()->with('toast_success', 'Data berhasil Dihapus!');  
    }
}
