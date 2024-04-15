<?php

namespace App\Http\Controllers\api;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BarangAnyarResource;
use App\Http\Resources\BarangResource;

class APIBarangController extends Controller
{
    //
    public function index(){
        $barang = Barang::all();
        //ddd($barang);
    
        return BarangResource::collection($barang);
    }

    public function show($id){
        $barang = Barang::findOrFail($id);

        return new BarangResource($barang);
    }

    public function koleksi(){
        $barang = Barang::all();

        return new BarangAnyarResource($barang);
    }

    public function create(Request $request){
        Barang::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan
        ]);

        return response()->json(['Pesan' => 'Berhasil dibuat'], 201);
    }

    public function update(Request $request, $id){
        Barang::find($id)->update([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan
        ]);

        return response()->json(['Pesan' => 'Berhasil diupdate'], 202);
    }

    public function destroy($id){
        Barang::destroy($id);

        return response()->json(['Pesan' => 'Berhasil dihapus'], 204);
    }
}
