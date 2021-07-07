<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index (){
        $posyandu = User::where('level','kader1')->orWhere('level','kader2')->get();
        $umum = User::where('level', 'umum')->get();
        
        return view('User.index', compact('posyandu', 'umum'));
    }

    public function tambahPetugas(){
        return view("User.petugas.create");
    }

    public function storePetugas(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'level' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ];

        $messages = [
            'required' => 'Bidang :attribute harus diisi'
        ];

        $this->validate($request, $rules, $messages);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level
        ]);


        return redirect()->route('pengguna.index');
    }

    public function editPetugas ($id) {
        $petugas = User::findOrFail($id);
        
        return view('User.petugas.edit', compact('petugas'));
    }

    public function updatePetugas (Request $request, $id){
        $petugas = User::findOrFail($id);

        $petugas->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $petugas->password,
            'level' => $request->level
        ]);

        return redirect()->route('pengguna.index');

    }

    public function detailPetugas($id){
        $petugas = User::findorfail($id);
        return view('User.petugas.detail', Compact('petugas'));
    }

    public function hapusPetugas($id){
        $petugas = User::findOrFail($id);

        $petugas->delete();

        return redirect()->route('pengguna.index');   
    }

    public function tambahUmum(){
        return view("User.umum.create");
    }

    public function storeUmum(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ];

        $messages = [
            'required' => 'Bidang :attribute harus diisi'
        ];

        $this->validate($request, $rules, $messages);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'umum'
        ]);


        return redirect()->route('pengguna.index');
    }

    public function editUmum($id) {
        $umum = User::findOrFail($id);
        
        return view('User.umum.edit', compact('umum'));
    }

    public function updateUmum (Request $request, $id){
        $umum = User::findOrFail($id);

        $umum->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $umum->password,
        ]);

        return redirect()->route('pengguna.index');

    }

    public function hapusUmum($id){
        $umum = User::findOrFail($id);

        $umum->delete();

        return redirect()->route('pengguna.index');   
    }
    
}
