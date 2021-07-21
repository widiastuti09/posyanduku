<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class AuthController extends Controller{

    public function __construct(){
        $this->middleware('auth_mobile')->except(['login']);
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong'
        ];
        $validation = Validator::make($request->all(),$rules, $messages);

        if($validation->fails()) {
            return response()->json([
                'message' => 'Terjadi kesalahan',
                'status' => 401,
                'error' => $validation->errors()
            ], 401);
        }

        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            $user = User::findOrFail(Auth::user()->id);
            $user->update(['api_token' => bcrypt($request->email)]);

            return response()->json([
                'message' => 'Login berhasil',
                'status' => 200,
                'data' => $user
            ]);
        }else{
            return response()->json([
                'message'=>'Login gagal',
                'status' => 401,
                'error' => 'Username or Password is salah'
            ], 401); 
        }


    }

    public function user(){
        $user = Auth::user();

        return response()->json([
            'message'=>'Berhasil',
            'status' => 200,
            'data' => $user
        ]);
    }

    public function saveDeviceToken(Request $request){
        auth()->user()->update(['device_token' => $request->device_token]);
        return response()->json([
            'message'=>'Berhasil menyimpan token',
            'status' => 200,
        ], 200);
    }
}
