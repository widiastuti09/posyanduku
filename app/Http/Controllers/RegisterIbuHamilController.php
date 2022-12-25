<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ibuhamil;
use App\User;

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
        $users = User::doesntHave('ibuhamil')->where('level','umum')->get();
        return view('RegisterIbuHamil.addregister', compact('users'));
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
            'tanggal_pendaftaran' => 'required',
            'nama' => 'required|alpha_spaces',
            'tanggal_lahir' => 'required',
            'nama_suami' => 'required|alpha_spaces',
            'usia' => 'required|max:2',
            'goldarah' => 'required',
            'rt' => 'required|max:2',
            'rw' => 'required|max:2',
            'telp' => 'required|min:10|max:14',
            'user_id' => 'required'
        ];

        $message = [
            'user_id.required' => 'Pilih salah satu',
            'required' => ':attribute harus diisi',
            'max' => ':attribute maksimal :max karakter',
            'min' => ':attribute min :min karakter',
            'alpha_spaces' => ':attribute hanya huruf dan spasi'
        ];


        $this->validate($request, $rules, $message);

        Ibuhamil::create([
            'nama'          =>$request->nama, 
            'tgllahir'      =>$request->tanggal_lahir, 
            'namasuami'     =>$request->nama_suami, 
            'goldarah'      =>$request->goldarah, 
            'usia'          =>$request->usia,
            'rt'            =>$request->rt, 
            'rw'            =>$request->rw,
            'telp'          =>$request->telp, 
            'tglregister'   =>$request->tanggal_pendaftaran,
            'user_id'       =>$request->user_id
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
        $rules= [
            'nama'          => 'required|string',
            'tgllahir'      => 'required',
            'namasuami'     => 'required|string',
            'goldarah'      => 'required',
            'usia'          => 'required|max:2',
            'rt'            => 'required|max:2',
            'rw'            => 'required|max:2',
            'telp'          => 'required|max:13',
            'tglregister'   => 'required' 
        ];

        $messages= [
            'required' => ':attribute tidak boleh kosong'
        ];
        $this->validate($request, $rules, $messages);
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
        // return back()->with('toast_success','Data Berhasil Dihapus');
        return response()->json(['status'=>'Data Berhasil dihapus !']);

    }
}
