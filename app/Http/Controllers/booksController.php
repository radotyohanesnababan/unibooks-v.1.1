<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class booksController extends Controller
{
    public function indexhome(){
        $books = books::orderBy('judul')->paginate(10);
        $publisher = publisher::all();
        return view('home', compact('books','publisher'));
    }
    public function search (Request $request){
        $query = $request->input('search');
        $searchTerm = $request->input('search');
        $publisher = publisher::all();
        $books = books::where('judul', 'like', "%{$searchTerm}%")->paginate(10);
        $page = $request->input('page');
            switch ($page) {
                case 'admin':
                    return view('admin', compact('books','publisher'))->with('query', $query);
                    break;
                case 'pengadaan':
                    return view('pengadaan', compact('books','publisher'))->with('query', $query);
                    break;
                default:
                    return view('home', compact('books','publisher'))->with('query', $query);
            }
    }
    public function show($id_buku){
        $books = books::findOrFail($id_buku);
        // return response()->json(($books));
        return view('description', compact('books'));
    }

    


}