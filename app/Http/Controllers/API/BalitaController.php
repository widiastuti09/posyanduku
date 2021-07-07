<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Registrasibalita;
use Auth;

class BalitaController extends Controller
{
    public function __construct(){
        $this->middleware('auth_mobile');
    }

    public function balita(){
        $balita = Registrasibalita::where('user_id', Auth::user()->id)->get();
        
        return response()->json([
            'message' => 'Berhasil mengambil data ibu hamil',
            'status' => 200,
            'data' => $balita
        ]);
    }

    public function detailBalita($id) {
        $balita = Registrasibalita::findOrFail($id);

        return response()->json([
            'message' => 'Berhasil mengambil data ibu hamil',
            'status' => 200,
            'data' => $balita
        ]);
    }
}
