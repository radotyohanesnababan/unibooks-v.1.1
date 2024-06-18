<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class booksController extends Controller
{
    public function index(){
        $books = books::all();
        return view('home', compact('books'));
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis'=>'required|string|max:255',
            'tahun_terbit'=> 'required|integer',
            'id_penerbit'=> 'required|integer',
            'genre'=> 'required|string|max:100',
            'deskripsi'=> 'required|string',
            'stok'=>'required|integer',
            'isbn'=>'required|string|max:13'
        ]);

        $books = new books();
        $books->judul = $request->input('judul');
        $books->penulis = $request->input('penulis');
        $books->tahun_terbit = $request->input('tahun_terbit');
        $books->id_penerbit = $request->input('id_penerbit');
        $books->genre = $request->input('genre');
        $books->deskripsi = $request->input('deskripsi');
        $books->stok= $request->input('stok');
        $books->isbn = $request->input('isbn');
        $books->save();

        return response()->json(['message'=> 'Buku Ditambahkan!'],201);

    }

    public function destroy($id){
        $books = books::findOrFail($id);
        $books->delete();

        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Dihapus.');
    }


}
