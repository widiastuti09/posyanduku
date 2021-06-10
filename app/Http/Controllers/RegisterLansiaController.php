<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lansia;

class RegisterLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerlansia()
    {
        $lansias = Lansia::all();
        return view('HalamanAdmin.registerlansia',compact('lansias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Lansia.addregisterlansia');
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
        $request->validate([
            'tanggal_register'  => 'required',
            'nama'              => 'required',
            'tanggal_lahir'      => 'required',
            'jenis_kelamin'     => 'required',
            'rt'                => 'required',
            'rw'                => 'required',
            'berat_badan'       => 'required',
            'tinggi_badan'      => 'required',
            'lingkar_pinggang'  => 'required',
            'tekanan_darah'     => 'required',
            'glukosa_darah'     => 'required',
            'lemak_tubuh'       => 'required',
            'imt'               => 'required',
            'lemak_perut'       => 'required',
            'kolestrol'         => 'required',
            'asam_urat'         => 'required',
            'makan_berlemak'    => 'required',
            'makan_manis'       => 'required',
            'zat_adiktif'       => 'required',
            'jelantah'          => 'required',
            'merokok'           => 'required',
            'olahraga'          => 'required',
            'keterangan'        => 'required'
        ]);
       

        lansia::create([
        'tanggal_register' => $request -> tanggal_register,
        'nama'             => $request -> nama,
        'tanggal_lahir'    => $request -> tanggal_lahir,
        'jenis_kelamin'    => $request -> jenis_kelamin,
        'rt'               => $request -> rt,
        'rw'               => $request -> rw,
        'berat_badan'      => $request -> berat_badan,
        'tinggi_badan'     => $request -> tinggi_badan,
        'lingkar_pinggang' => $request -> lingkar_pinggang,
        'tekanan_darah'    => $request -> tekanan_darah,
        'glukosa_darah'    => $request -> glukosa_darah,
        'lemak_tubuh'      => $request -> lemak_tubuh,
        'imt'              => $request -> imt,
        'lemak_perut'      => $request -> lemak_perut,
        'kolestrol'        => $request -> kolestrol,
        'asam_urat'        => $request -> asam_urat,
        'makan_berlemak'   => $request -> makan_berlemak,
        'makan_manis'      => $request -> makan_manis,
        'zat_adiktif'      => $request -> zat_adiktif,
        'jelantah'         => $request -> jelantah,
        'merokok'          => $request -> merokok,
        'olahraga'         => $request -> olahraga,
        'keterangan'       => $request -> keterangan,
        ]);

        return redirect('registerlansia')->with('toast_success', 'Data berhasil Disimpan!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lansias = Lansia::findorfail($id);
        return view ('Lansia.detailLansia',Compact('lansias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lansias = Lansia::findorfail($id);
        return view('Lansia.editLansia', Compact('lansias'));
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
        $lansias = Lansia::findorfail($id);
        $lansias -> update($request->all());
        return redirect('registerlansia')->with('toast_success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lansias = Lansia::findorfail($id);
        $lansias->delete();
        return back()->with('toast_success','Data Berhasil dihapus');
    }
}
