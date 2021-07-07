<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ibuhamil;
use Auth;

class IbuHamilController extends Controller
{
    public function __construct(){
        $this->middleware('auth_mobile');
    }

    public function ibuHamil() {
        $ibuhamil = Ibuhamil::where('user_id', Auth::user()->id)->get();

        return response()->json([
            'message' => 'Berhasil mengambil data ibu hamil',
            'status' => 200,
            'data' => $ibuhamil
        ]);
    }

    public function detailIbuHamil($id){
        $ibuhamil = Ibuhamil::findOrFail($id);

        return response()->json([
            'message' => 'Berhasil mengambil data ibu hamil',
            'status' => 200,
            'data' => $ibuhamil
        ]);
    }
}
