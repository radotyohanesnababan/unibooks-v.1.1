<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publisher;

class publisherController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nama_penerbit' => 'required|string|max:255',
            'alamat'=>'required|string',
            'nomor_telepon'=> 'required|string|max:15',
            'email'=> 'required|string|max:100',
        ]);

        $publisher = new publisher();
        $publisher->nama_penerbit = $request->input('nama_penerbit');
        $publisher->alamat = $request->input('alamat');
        $publisher->nomor_telepon = $request->input('nomor_telepon');
        $publisher->email = $request->input('email');
        $publisher->save();

        return response()->json(['message'=> 'Penerbit Ditambahkan'],201);

    }

}
