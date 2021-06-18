<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ibuhamil;

class RegisterIbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerhamil()
    {
        $ibuhamils = Ibuhamil::all();
     return view('HalamanAdmin.registeribuhamil',compact('ibuhamils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RegisterIbuHamil.addregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required|string',
            'tgllahir'      => 'required',
            'namasuami'     => 'required|string',
            'goldarah'      => 'required',
            'tinggibadan'   => 'required',
            'usia'          => 'required|max:2',
            'hemoglobin'    => 'required|max:2',
            'htp'           => 'required',
            'hpht'          => 'required',
            'beratbadan'    => 'required|max:2',
            'rt'            => 'required|max:2',
            'rw'            => 'required|max:2',
            'hamilke'       => 'required|max:2',
            'persalinanke'  => 'required|max:2',
            'keguguranke'   => 'required|max:1',
            'telp'          => 'required|max:13',
            'tglregister'   => 'required'
        ],
        [
            'nama.required'         => 'Nama Harus di isi',
            'tgllahir.required'     => 'Tanggal Lahir Harus di isi',
            'namasuami.required'    => 'Nama Suami Harus di isi',
            'namasuami.alpha'       => 'Nama Suami Harus di isi Karakter Huruf',
            'goldarah.required'     => 'Golongan Darah Harus di isi',
            'tinggibadan.required'  => 'Tinggi Badan Harus di isi',
            'usia.required'         => 'Usia Harus di isi',
            'usia.max'              => 'Usia Maksimal 2 Karakter',
            'hemoglobin.required'   => 'Hemoglobin Harus di isi',
            'hemoglobin.max'        => ' Hemoglobin Maksimal 2 Karakter',
            'htp.required'          => 'HTP Harus di isi',
            'hpht.required'         => 'HPHT Harus di isi',
            'beratbadan.required'   => 'Berat Badan Harus di isi',
            'beratbadan.max'        => ' Berat Badan Maksimal 2 Karakter',
            'rt.required'           => 'RT Harus di isi',
            'rt.max'                => ' RT Maksimal 2 Karakter',
            'rw.required'           => 'RW Harus di isi',
            'hemoglobin.reuired'    => 'Maksimal 2 Karakter',
            'hamilke.required'      => 'Hamil Ke Harus di isi',
            'persalinanke.required' => 'Persalinan Ke Harus di isi',
            'keguguranke.required'  => 'Keguguran Ke Harus di isi',
            'telp.required'         => 'Telp Harus di isi',
            'tglregister.required'  => 'Tanggal Register Harus di isi' 
        ]);
        // dd($request->all());
        Ibuhamil::create([
            'nama'          =>$request->nama, 
            'tgllahir'      =>$request->tgllahir, 
            'namasuami'     =>$request->namasuami, 
            'goldarah'      =>$request->goldarah, 
            'tinggibadan'   =>$request->tinggibadan, 
            'usia'          =>$request->usia, 
            'hemoglobin'    =>$request->hemoglobin, 
            'hpht'          =>$request->hpht, 
            'htp'           =>$request->htp, 
            'beratbadan'    =>$request->beratbadan, 
            'rt'            =>$request ->rt, 
            'rw'            =>$request ->rw, 
            'hamilke'       =>$request ->hamilke, 
            'persalinanke'  =>$request ->persalinanke, 
            'keguguranke'   =>$request ->keguguranke, 
            'telp'          =>$request ->telp, 
            'tglregister'   =>$request ->tglregister
        ]);

        return redirect('registeribuhamil')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regmil = Ibuhamil::findorfail($id);
        return view ('RegisterIbuHamil.detail',Compact('regmil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regmil = Ibuhamil::findorfail($id);
        return view('RegisterIbuHamil.editregister', Compact('regmil'));
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
        $regmil = Ibuhamil::findorfail($id);
        $regmil->update($request->all());
        return redirect('registeribuhamil')->with('toast_success','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regmil = Ibuhamil::findorfail($id);
        $regmil->delete();
        return back()->with('toast_success','Data Berhasil Dihapus');
    }
}
