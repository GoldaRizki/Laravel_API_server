<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PenggunaController extends Controller
{
    //
    public function login(Request $request){
        
        $data_valid = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $data_valid['username'])->first();

        if (! $user || ! Hash::check($data_valid['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }


        return response()->json(['token' => $user->createToken('mboh lah karepmu')->plainTextToken], 200);


    }

    public function logout(Request $request){
        
        //return User::find(1)->tokens()->where('id', 1)->get();
        return User::find(1)->tokens()->delete();
    }
}
