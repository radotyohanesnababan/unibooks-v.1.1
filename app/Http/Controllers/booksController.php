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
        $books = books::where('judul', 'like', "%{$searchTerm}%")->paginate(10);
        return view('home', compact('books'))->with('query', $query);
    }

    


}