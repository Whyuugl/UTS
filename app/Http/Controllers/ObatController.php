<?php

namespace App\Http\Controllers;
use App\Models\Obat;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function obat(){
        $data = Obat::all();
        return view('obat', compact('data'));
    }

    public function tambahobat(){
        return view('tambahobat');
    }

    public function insertobat(Request $request){
        Obat::create($request->all());
        return redirect()->route('obat');
    }

    public function tampilobat($id){
        $data = Obat::find($id);
        return view('tampilobat', compact('data'));
    }

    public function updateobat(Request $request, $id){
        $data = Obat::find($id);
        $data->update($request->all());
        return redirect()->route('obat');
    }

    public function deleteobat($id){
        $data = Obat::find($id);
        $data->delete();
        return redirect()->route('obat');
    }
}
