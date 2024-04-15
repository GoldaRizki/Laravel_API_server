<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    //

    public function index(){
        $alat = Alat::all();
        return response()->json($alat);
    }

    public function show($id){
        $alat = Alat::findOrFail($id);
        return response()->json($alat);
    }

    public function store(Request $request){
        Alat::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'tgl_beli' => $request->tgl_beli,
        ]);

        return response()->json(['Pesan' => 'Berhasil dibuat'], 201);
    }

    public function update(Request $request,$id){
        Alat::find($id)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'tgl_beli' => $request->tgl_beli,
        ]);
        return response()->json(['Pesan' => 'Berhasil dibuat', 202]);
    }

    public function destroy($id){
        Alat::destroy($id);
        return response()->json(['Pesan' => 'Berhasil dibuat', 204]);
    }


}
