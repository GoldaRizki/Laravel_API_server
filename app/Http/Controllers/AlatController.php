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
        $alat = Alat::find($id);
        return response()->json($alat);
    }

    public function store(Request $request){
        
    }

    public function update(Request $request, $id){
        
    }

    public function destroy($id){
        
    }

    
}
