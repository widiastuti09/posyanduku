<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bumilresti;
use App\Ibuhamil;
use PDF;

class BumilrestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bumilresti = Bumilresti::with('ibuhamil')->get();
        return view ('BumilResti.bumilresti', compact('bumilresti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ibuHamil = Ibuhamil::all();
        return view('BumilResti.addbumilresti', compact('ibuHamil'));
    }

    public function store(Request $request)
    {
        $rules = [
            'id_ibu' => 'required',
            'umur_hamil' => 'required',
            'hamil_ke' => 'required',
            'persalinan_ke' => 'required',
            'keguguran_ke' => 'required',
            'asuransi' => 'required',
            'resiko_tinggi' => 'required',
            'hpl' => 'required',
            'wali_bumil' => 'required|regex:/^[\pL\s\-]+$/u',
        ];

        $messages = [
            'required' => ':attribute harus diisi',
            'regex' => ':attribute hanya huruf dan spasi'
        ];

        $this->validate($request, $rules, $messages);

        Bumilresti::create([
            'umur_hamil' => $request ->umur_hamil,
            'gpa' => $request -> hamil_ke.'/'.$request -> persalinan_ke.'/'.$request -> keguguran_ke,
            'asuransi' => $request->asuransi,
            'resiko_tinggi' => $request->resiko_tinggi,
            'hpl' => $request->hpl,
            'wali_bumil' => $request->wali_bumil,
            'id_ibu' => $request->id_ibu
        ]);
        return redirect()->route('bumilresti');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bumilresti = Bumilresti::findorfail($id);
        return view ('BumilResti.detailbumilresti', compact('bumilresti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
       $bumilresti= Bumilresti::findorfail($id);
    //    dd($bumilresti);
       $ibuHamil = Ibuhamil::all();
        return view('BumilResti.editbumilresti', compact('bumilresti','ibuHamil'));
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
        $bumilresti = Bumilresti::findorfail($id);
        $rules = [
            'id_ibu'            => 'required',
            'umur_hamil'        => 'required',
            'gpa'               => 'required',
            'asuransi'          => 'required',
            'resiko_tinggi'     => 'required',
            'hpl'               => 'required',
            'wali_bumil'        => 'required|regex:/^[\pL\s\-]+$/u',
        ];
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'regex' => ':attribute hanya huruf dan spasi'
        ];

        $this->validate($request, $rules, $messages);
        $bumilresti->update($request->all());
        return redirect()->route('bumilresti')->with('toast_success','Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bumilresti = Bumilresti::findorfail($id);
        $bumilresti -> delete();
        // return back()->with('toast_success', 'Data berhasil dihapus!');
        return response()->json(['status'=>'Data Berhasil dihapus !']);
    }
    public function print()
    {
        $bumilresti = Bumilresti::with('ibuhamil')->get();
        $pdf = PDF::loadview('Laporan.CetakResti', compact('bumilresti'))->setPaper('A4','lanscape');
        return $pdf->stream();

    }
}
