<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\publisher;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Mckenziearts\Notify\LaravelNotify;
use Mckenziearts\Notify\LaravelNotifyServiceProvider;

class UserController extends Controller
{
   
    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Books::where('judul', 'LIKE', '%' . $query . '%')->get();
        $publisher = Publisher::all(); 
    
        return view('userview.resultbook', compact('books', 'publisher'))->with('query', $query);
    }

    public function functionhomepage(){
        $booksrandom = books::inRandomOrder()-> take(5)->get();
        $booksnewarrival = books::orderBy('created_at', 'desc')->take(5)->get();
        return view('userview.home', compact('booksrandom','booksnewarrival'));
    }

     

   
}
