<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasibalita;
use App\Ibuhamil;
use App\User;

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
        return view('HalamanAdmin.registerbalita', compact('registrasibalitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addregisterbalita()
    {
        $ibuHamil = Ibuhamil::all();
        $users = User::where('level', 'umum')->get();
        return view('Registerbalita.addregister', compact('ibuHamil', 'users'));
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
            'nama_balita' => 'required|alpha_spaces',
            'tempat_lahir' => 'required|alpha_spaces',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ayah' => 'required|alpha_spaces',
            // 'rt' => 'required|max:2',
            // 'rw' => 'required|max:2',
            'usia' => 'required|max:1',
            'berat_badan_lahir' => 'required',
            'panjang_panjang_lahir' => 'required',
            // 'no_kk' => 'required|min:16',
            'nikbalita' => 'required|min:16|unique:registrasibalitas',
            // 'telp' => 'required|max:13|min:10',
            'id_ibu' => 'required',
        ];

        $messages = [
            'required' => ':attribute harus diisi',
            'max' => ':attribute maksimal :max karakter',
            'min' => ':attribute minimal :min karakter',
            'alpha_spaces' => ':attribute hanya huruf dan spasi',
            'unique' => ':attribute sudah dipakai',
        ];

        $this->validate($request, $rules, $messages);

        // if($request->terdaftar){
        //     $ibuHamil = Ibuhamil::findOrFail($request->id_ibu);
        // }

        Registrasibalita::create([
            'namabalita'    => $request->nama_balita,
            'tempatlahir'   => $request->tempat_lahir,
            'tanggallahir'  => $request->tanggal_lahir,
            'jeniskelamin'  => $request->jenis_kelamin,
            'namaayah'      => $request->nama_ayah,
            // 'namaibu'       => $request->terdaftar ? $ibuHamil->nama : $request->namaibu,
            'id_ibu'        => $request->id_ibu,
            // 'rt'            => $request->rt,
            // 'rw'            => $request->rw,
            'usia'          => $request->usia,
            'bblahir'       => $request->berat_badan_lahir,
            'pblahir'       => $request->panjang_panjang_lahir,
            // 'nokk'          => $request->no_kk,
            'nikbalita'     => $request->nikbalita,
            // 'telp'          => $request->telp,
            // 'user_id'       => null
        ]);

        return redirect('register')->with('toast_success', 'Data berhasil Disimpan!');
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
        return view('Registerbalita.detail', Compact('regbal'));
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
        $rules = [
            'namabalita'    => 'required|alpha_spaces',
            'tempatlahir'   => 'required|alpha_spaces',
            'tanggallahir'  => 'required',
            'jeniskelamin'  => 'required',
            'namaayah'      => 'required|alpha_spaces',
            // 'rt'            => 'required|max:2',
            // 'rw'            => 'required|max:2',
            'usia'          => 'required|max:1',
            'bblahir'       => 'required',
            'pblahir'       => 'required',
            // 'nokk'          => 'required|min:16',
            // 'telp'          => 'required|max:13|min:10'
        ];
        $messages = [
            'namabalita.required'   => 'Nama Balita Harus diisi',
            'namabalita.required'   => 'Nama Balita Harus diisi',
            'tanggallahir.required' => 'Tanggal Lahir Harus diisi',
            'tempatlahir.required' => 'Tempat Lahir Harus diisi',
            'tempatlahir.alpha'   => 'Tempat Lahir Harus Diisi Dengan Huruf',
            'jeniskelamin.required' => 'Jenis Kelamin Harus diisi',
            'namaayah.required'     => 'Nama Ayah Harus diisi',
            'namaayah.alpha'   => 'Nama Ayah Harus Diisi Dengan Huruf',
            // 'namaibu.required'      => 'Nama Ibu Harus diisi',
            // 'namaibu.alpha'   => 'Nama Ibu Harus Diisi Dengan Huruf',
            // 'rt.required'           => 'RT Harus diisi',
            // 'rt.max'                => 'RT Maksimal 2 Karakter',
            // 'rw.required'           => 'RW Harus diisi',
            // 'rw.max'                => 'RW Maksimal 2 Karakter',
            'usia.required'         => 'Usia Harus diisi',
            'usia.max'              => 'Usia Maksimal 1 Karakter',
            'bblahir.required'      => 'Berat Badan Lahir Harus diisi',
            'pblahir.required'      => 'Panjang Badan Lahir Harus diisi',
            // 'nokk.required'         => 'No KK Harus diisi',
            // 'nokk.min'              => 'No KK Kurang dari 16 Karakter',
            'nikbalita.required'    => 'NIK Balita Harus diisi',
            'nikbalita.min'         => 'NIK Balita Kurang dari 16 Karakter',
            'alpha_spaces' => ':attribute hanya huruf dan spasi'    ,
            // 'telp.required'         => 'No Telp Harus Di isi',
            // 'telp.max'              => 'No Telp Maksimal 13 Karakter',
            // 'telp.min'              => 'No Telp Minimal 10 Karakter',
            'unique' => ':attribute sudah dipakai'
        ];
        
        if($regbal->nikbalita == $request->nikbalita){
            $rules['nikbalita'] = 'required|max:16';
        }else{
            $rules['nikbalita'] = 'required|max:16|unique:registrasibalitas';
        }
        // dd($rules);
        $this->validate($request, $rules, $messages);
        $regbal->update($request->all());
        return redirect('register')->with('toast_success', 'Data berhasil Diedit');
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
        // return back()->with('toast_success', 'Data berhasil dihapus');
        return response()->json(['status' => 'Data Berhasil dihapus !']);
    }
}
