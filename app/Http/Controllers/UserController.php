<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $posyandu = User::where('level', 'kader1')->orWhere('level', 'kader2')->get();
        $umum = User::where('level', 'umum')->get();

        return view('User.index', compact('posyandu', 'umum'));
    }

    public function tambahPetugas()
    {
        return view("User.petugas.create");
    }

    // kie fungsi nggo tambah petugas
    public function storePetugas(Request $request)
    {
        $rules = [
            'name' => 'required|alpha_spaces',
            'email' => 'required|unique:users',
            'level' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8',
        ];

        $messages = [
            'required' => ':attribute harus diisi',
            'same' => 'Password dan konfirmasi password tidak sama',
            'unique' => ":attribute sudah terpakai",
            'alpha_spaces' => ':attribute hanya huruf dan spasi'
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

    //  kie halaman edit
    public function editPetugas($id)
    {
        $petugas = User::findOrFail($id);

        return view('User.petugas.edit', compact('petugas'));
    }

    //  fungsi edit user/petugas
    public function updatePetugas(Request $request, $id)
    {
        $petugas = User::findOrFail($id);

        $rules = [
            'name' => 'required|alpha_spaces',
            'level' => 'required',
            'password' => 'required|min:8',
        ];

        if($petugas->email == $request->email){
            $rules['email'] = 'required';
        }else{
            $rules['email'] = 'required|unique:users';
        }

        $messages = [
            'required' => ':attribute harus diisi',
            'unique' => ":attribute sudah terpakai",
            'alpha_spaces' => ':attribute hanya huruf dan spasi'
        ];

        $this->validate($request, $rules, $messages);

        $petugas->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $petugas->password,
            'level' => $request->level
        ]);

        return redirect()->route('pengguna.index');
    }

    // halaman detail
    public function detailPetugas($id)
    {
        $petugas = User::findorfail($id);
        return view('User.petugas.detail', Compact('petugas'));
    }

    // fungsi hapus
    public function hapusPetugas($id)
    {
        $petugas = User::findOrFail($id);

        $petugas->delete();

        // return redirect()->route('pengguna.index');
        return response()->json(['status' => 'Data Berhasil dihapus !']);
    }

    // halaman tambah umum
    public function tambahUmum()
    {
        return view("User.umum.create");
    }

    // fungsi tambah umum
    public function storeUmum(Request $request)
    {
        $rules = [
            'kk' => 'required|unique:users|digits:16',
            'nik' => 'required|unique:users|digits:16|different:kk',
            'name' => 'required|alpha_spaces',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8',
        ];

        $messages = [
            'required' => 'Bidang :attribute harus diisi',
            'same' => 'Password dan konfirmasi password tidak sama',
            'unique' => ":attribute sudah terpakai",
            'alpha_spaces' => ':attribute hanya huruf dan spasi',
            'digits' => ':attribute harus 16 digit',
            'different' => ':attribute tidak boleh sama'
        ];

        $this->validate($request, $rules, $messages);

        User::create([
            'kk' => $request->kk,
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'umum'
        ]);


        return redirect()->route('pengguna.index');
    }
    public function detailUmum($id)
    {
        $umum = User::findorfail($id);
        return view('User.umum.detail', Compact('umum'));
    }

    public function editUmum($id)
    {
        $umum = User::findOrFail($id);

        return view('User.umum.edit', compact('umum'));
    }

    public function updateUmum(Request $request, $id)
    {
        $umum = User::findOrFail($id);

        $rules = [
            'name' => 'required|alpha_spaces',
        ];

        $messages = [
            'required' => ':attribute harus diisi',
            'unique' => ":attribute sudah terpakai",
            'alpha_spaces' => ':attribute harus huruf',
            'different' => ':attribute tidak boleh sama'
        ];

        if($umum->email == $request->email){
            $rules['email'] = 'required';
        }else{
            $rules['email'] = 'required|unique:users';
        }

        if($umum->nik == $request->nik){
            $rules['nik'] = 'required|different:kk';
        }else{
            $rules['nik'] = 'required|unique:users||different:kk';
        }

        if($umum->kk == $request->kk){
            $rules['kk'] = 'required';
        }else{
            $rules['kk'] = 'required|unique:users';
        }

        $this->validate($request, $rules, $messages);

        $umum->update([
            'kk' => $request->kk,
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $umum->password,
        ]);

        return redirect()->route('pengguna.index');
    }

    public function hapusUmum($id)
    {
        $umum = User::findOrFail($id);

        $umum->delete();

        // return redirect()->route('pengguna.index');
        return response()->json(['status' => 'Data Berhasil dihapus !']);
    }

    public function get_user_detail($id)
    {
        $user = User::findOrFail($id);

        return response()->json(['nama' => $user->name]);
    }
}
