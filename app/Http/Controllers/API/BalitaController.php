<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Ibuhamil;
use Illuminate\Http\Request;
use App\Registrasibalita;
use App\Penimbangan;
use App\Jadwalbalita;
use App\User;
use Auth;
use Carbon\Carbon;

class BalitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth_mobile');
    }

    public function balita()
    {
        // $balita = Registrasibalita::where('user_id', Auth::user()->id)->get();

        $balita = User::findOrFail(Auth::user()->id)->ibuhamil->balita;

        // $balita = User::findOrFail(21)->ibuhamil->balita;

        // $balita = Registrasibalita::all();

        return response()->json([
            'message' => 'Berhasil mengambil data register balita',
            'status' => 200,
            'data' => $balita
        ]);
    }

    public function detailBalita($id)
    {
        $balita = Registrasibalita::findOrFail($id);
        return response()->json([
            'message' => 'Berhasil mengambil data register balita',
            'status' => 200,
            'data' => $balita

        ]);
    }

    public function penimbanganBalita($id)
    {
        $penimbangan = Penimbangan::where('namabalita_id', $id)->orderBy('tanggal', 'ASC')->with('registrasibalitas')->get();
        $dataPenimbangan = $penimbangan->map(function ($item) {
            $bornDate = Carbon::parse($item->registrasibalitas->tanggallahir);
            $consulDate = Carbon::parse($item->tanggal);
            $ageInMonth = $bornDate->diffInMonths($consulDate);
            $item->umur = $ageInMonth;
            return $item;
        });

        // $penimbangan = Penimbangan::where('namabalita_id', $id)->orderBy('tanggal', 'ASC')->get();
        return response()->json([
            'message' => 'Berhasil mengambil data penimbangan balita',
            'status' => 200,
            'data' => $dataPenimbangan,
        ]);
    }

    public function statusImunisasi($id)
    {
        // $jenis_imunisasi = [
        //     'BCG, Polion 1 (0-7 hari)',
        //     'BCG, Polio 1 (1 bulan)',
        //     'DPI/HB 1, Polio 2 (2 bulan)',
        //     'DPI/HB 2, Polio 3 (3 bulan)',
        //     'DPI/HB 3, Polio 4 (4 bulan)',
        //     'Campak (9 bulan)'
        // ];

        $jenis_imunisasi = [
            'HB-0 (0-7 hari)',
            'BCG',
            'Polio 1',
            'DPT-HB-Hib 1',
            'Polio 2',
            'DPT-HB-Hib 2',
            'Polio 3',
            'DPT-HB-Hib 3',
            'Polio 4',
            'IPV',
            'Campak',
            'DPT-HB-Hib Lanjutan',
            'Campak Lanjutan'
        ];

        $data = [];

        if (Penimbangan::where('namabalita_id', '=', $id)->first() == null) {
            return response()->json([
                'message' => 'Berhasil mengambil data status imunisasi',
                'status' => 200,
                'data' => $data,
            ]);
        }

        foreach ($jenis_imunisasi as $key => $jenis) {
            $data[$key]['jenis'] = $jenis;
            $penimbangan = Penimbangan::where([['namabalita_id', '=', $id], ['jenis_imunisasi', '=', $jenis]])->first();
            $data[$key]['status'] = ($penimbangan == null) ? 'Belum' : 'Sudah';
            $data[$key]['tanggal'] = ($penimbangan == null) ? NULL : $penimbangan->tanggal;
        }

        return response()->json([
            'message' => 'Berhasil mengambil data status imunisasi',
            'status' => 200,
            'data' => $data,
        ]);
    }
}
