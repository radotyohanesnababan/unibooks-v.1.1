<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\publisher;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function index(){
        $books = books::orderBy('judul')->paginate(10);
        $publisher = publisher::all();
        return view('admin', compact('books','publisher'));
    }
    
    public function indexpengadaan(){
        $publisher = publisher::all();
        $books = books::with('publisher')
            ->orderBy('stok', 'asc')
            ->paginate(10);
        return view('pengadaan', compact('books','publisher'));
    }

    //addbooks
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'nama_penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'genre' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer',
            'isbn' => 'required|string|max:13'
        ]);
        // Temukan penerbit berdasarkan nama_penerbit dari request
        $publisher = publisher::where('nama_penerbit', $request->input('nama_penerbit'))->first();
        $books = new books();
        $books->judul = $request->judul;
        $books->penulis = $request->penulis;
        $books->id_penerbit = $publisher->id_penerbit;
        $books->tahun_terbit = $request->tahun_terbit;
        $books->genre = $request->genre;
        $books->deskripsi = $request->deskripsi;
        $books->stok = $request->stok;
        $books->isbn = $request->isbn;
        $books->save();
        return redirect()->route('get_books')->with(['success'=>'Buku Berhasil Disimpan']);
        //return response()->json(['message' => 'Data buku berhasil disimpan'], 201);
    }

    public function destroy( $id_buku){

        //dd($id_buku);
        $books = books::findOrFail($id_buku);
        $books->delete(); 
        
        //return response()->json(['message' => 'Book deleted successfully.'],201);
        return redirect()->route('get_books')->with(['success'=>'Buku berhasil dihapus!']);
    }

    

    
    public function update(Request $request, $id_buku){
        // dd($request->all());
        $books=books::findOrFail($id_buku);

        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'nama_penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'genre' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer',
            'isbn' => 'required|string|max:13'
        ]);

        //ambil nama publisher convert to id
        $publisher = publisher::where('nama_penerbit', $request->input('nama_penerbit'))->first();
        $books->judul = $request->judul;
        $books->penulis = $request->penulis;
        $books->id_penerbit = $publisher->id_penerbit;
        $books->tahun_terbit = $request->tahun_terbit;
        $books->genre = $request->genre;
        $books->deskripsi = $request->deskripsi;
        $books->stok = $request->stok;
        $books->isbn = $request->isbn;
        $books->save();
        //return response()->json(['message' => 'Buku berhasil diperbaui.'],200);
        return redirect()->route('get_books')->with(['success'=>'Buku Berhasil Diperbaharui']);
    }

    public function exportCSV(){
        $books = books::all();
        return response()->json($books);
    }

    


}
