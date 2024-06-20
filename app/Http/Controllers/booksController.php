<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class booksController extends Controller
{

    public function index(){
        $books = books::all();
        return view('home', compact('books'));
    }
    
    public function indexadmin(){
        $books = books::all();
        return view('admin', compact('books'));
    }
    public function search (Request $request){
        $searchTerm = $request->input('search');
        $books = books::where('judul', 'like', "%{$searchTerm}%")->get();
        return view('home', compact('books'));
    }

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer',
        'nama_penerbit' => 'required|string|max:255',
        'genre' => 'required|string|max:100',
        'deskripsi' => 'required|string',
        'stok' => 'required|integer',
        'isbn' => 'required|string|max:13'
    ]);

    // Temukan penerbit berdasarkan nama_penerbit dari request
    $publisher = Publisher::where('nama_penerbit', $request->input('nama_penerbit'))->first();

    if (!$publisher) {
        return response()->json(['error' => 'Penerbit tidak ditemukan'], 404);
    }

    // Buat instance baru dari model Books
    $book = new Books();
    $book->judul = $request->input('judul');
    $book->penulis = $request->input('penulis');
    $book->tahun_terbit = $request->input('tahun_terbit');
    $book->id_penerbit = $publisher->id_penerbit; // Sesuaikan dengan nama kolom yang benar
    $book->genre = $request->input('genre');
    $book->deskripsi = $request->input('deskripsi');
    $book->stok = $request->input('stok');
    $book->isbn = $request->input('isbn');
    $book->save();

    return response()->json(['message' => 'Data buku berhasil disimpan'], 201);
}


}