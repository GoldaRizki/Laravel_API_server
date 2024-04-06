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
    
        return new BarangResource($barang);
    }

    public function koleksi(){
        $barang = Barang::all();

        return new BarangAnyarResource($barang);
    }
}
