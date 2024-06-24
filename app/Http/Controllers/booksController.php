<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class booksController extends Controller
{

    public function index(){
        $books = books::orderBy('judul')->get();
        return view('home', compact('books'));
    }
    
    public function indexadmin(){
        $books = books::all()
            ->orderBy('judul', 'asc')
            ->get();
        return view('admin', compact('books'));
    }
    public function search (Request $request){
        $query = $request->input('search');
        $searchTerm = $request->input('search');
        $books = books::where('judul', 'like', "%{$searchTerm}%")->paginate(10);
        return view('home', compact('books'))->with('query', $query);
    }


}