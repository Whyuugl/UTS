<?php

namespace App\Http\Controllers;
use App\Models\Pasien;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){

        $data = Pasien::all();
        return view('pasien',  compact('data'));
    }

    public function tambahpasien(){
        return view('tambahpasien');
    }

    public function insertpasien(Request $request){
        Pasien::create($request->all());
        return redirect()->route('pasien');
    }

    public function tampilpasien($id){
        $data = Pasien::find($id);
        return view('tampilpasien', compact('data'));
    }

    public function updatepasien(Request $request, $id){
        $data = Pasien::find($id);
        $data->update($request->all());
        return redirect()->route('pasien');
    }

    public function deletepasien($id){
        $data = Pasien::find($id);
        $data->delete();
        return redirect()->route('pasien');
    }


    public function pegawai(){
        return view('pegawai');
    }
}
