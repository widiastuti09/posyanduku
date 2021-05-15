<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penimbangan;

class PenimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penimbangan()
    {
        // $penimbangans =  Penimbangan::all();
        $penimbangans =  Penimbangan::paginate(5);

        return view('HalamanUser.penimbangan',compact('penimbangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addpenimbangan()
    {
        return view('Penimbangan.addpenimbangan');
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
        Penimbangan::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'beratbadan' => $request->beratbadan,
            'imp' => $request->imp,
            'kia' => $request->kia,
            'vitamin' => $request->vitamin,
        ]);

        return redirect('penimbangan')->with('toast_success', 'Data berhasil disimpan!');
        ;
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
    public function editpenimbangan($id)
    {
        $pen = Penimbangan::findOrFail($id);
        
        return view('Penimbangan.editpenimbangan', compact('pen'));
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
        $pen = Penimbangan::findOrFail($id);
        $pen->update($request->all());
        return redirect('penimbangan')->with('toast_success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pen = Penimbangan::findOrFail($id);
        $pen->delete();
        return back()->with('toast_success', 'Data berhasil dihapus!');

    }
}
