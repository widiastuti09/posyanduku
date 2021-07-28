<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwalbumil;
use App\User;
use Carbon\Carbon;

class JadwalbumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jadmil = Jadwalbumil::all();
        $jadmil = Jadwalbumil::orderBy('tanggal','DESC')->get();
        return view ('Jadwal.Bumil.jadwal', compact('jadmil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadmil = Jadwalbumil::all();
        return view('Jadwal.Bumil.addjadwal',compact('jadmil'));
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
            'tanggal' => 'required',
            'waktu'     => 'required',
            'keterangan' => 'required',
            'status'    => 'required'
        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong'
        ];

        $this->validate($request, $rules, $messages);

        Jadwalbumil::create([
            'tanggal' => $request -> tanggal,
            'waktu'     => $request -> waktu,
            'keterangan' => $request -> keterangan,
            'status'    => $request -> status,
        ]);

        $deviceToken = User::whereNotNull('device_token')->pluck('device_token')->all();

        $this->sendNotification("Jadwal", "Jadwal pemeriksaan ibu hamil tanggal ".Carbon::parse($request->tanggal)->format('d M Y')." pukul ".$request->waktu, $deviceToken);

        return redirect('/Jadwal-Bumil')->with('toast_success', 'Data berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadmil = Jadwalbumil::findorfail($id);
        return view ('Jadwal.Bumil.detailjadwal', compact('jadmil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadmil = Jadwalbumil::findorfail($id);
        return view ('Jadwal.Bumil.editjadwal', compact('jadmil'));
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
        $jadmil = Jadwalbumil::findorfail($id);
        $jadmil -> update ($request->all());
        return redirect('/Jadwal-Bumil')->with('toast_success', 'Data berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadmil = Jadwalbumil::findorfail($id);
        $jadmil -> delete();
        return back ()->with('toast_success', 'Data berhasil Dihapus!');
    }

    public function sendNotification($title, $body, $token){
        $data = [
            'title' => $title,
            'body' => $body,
        ];

        $device_token = [];

        foreach($token as $t){
            $device_token[] = $t;
        }
        $payload = [
            'registration_ids' => $device_token,
            'notification' => $data
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "Content-type: application/json",
                "Authorization: key=".env('FIREBASE_SERVER_KEY')
            ),
        ));

        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));

        $response = curl_exec($curl);
        curl_close($curl);
        
        return response()->json([
            'message' => 'Berhasil mengirim notif',
            'status' => 200,
            'data' => json_encode($response)
        ], 200);
    }
}
